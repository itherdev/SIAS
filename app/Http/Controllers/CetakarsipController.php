<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;


class CetakarsipController extends Controller
{
    function tampil()
    {
        $data_arsip = DB::table('data_arsip')
            ->limit(10)
            ->get();
        return $data_arsip;
    }

    function pdf()
    {
        $pdf = \App::make('dompdf.wrapper')->setPaper('A4', 'landscape');
        $pdf->loadHTML($this->convert_data_arsip_to_html());
        return $pdf->stream();
    }

    function convert_data_arsip_to_html()
    {
        $data_arsip = $this->tampil();
        $Tglnow = date('d F Y');
        $output = '
        <h1 style="text-align : center;">Laporan Daftar Arsip</h1>
        <h4 style="text-align: right;">' . "Per Tanggal : " . $Tglnow . '</h4>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
            <tr>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >No</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Kode Klarifikasi</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >No Register</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Tahun</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Jenis Arsip</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >NIK</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Nama</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Jenis Kelamin</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Tempat</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Tanggal Lahir</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Alamat</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Nama Orang Tua</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >NIK Orang Tua</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Lokasi</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Keterangan</th>
                <th style="border: 1px solid; font-size: 10px; padding:5px;" >Status</th>
            </tr>';
        $no = 0;
        foreach ($data_arsip as $tampil) {
            $Tgl = date("d F Y", strtotime($tampil->tahun));
            $no++;
            $output .= '
            <tr>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $no . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->kode_klarifikasi . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->no_register . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->tahun . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->jenis_arsip . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->nik . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->nama . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->jenis_kelamin . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->tempat . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->tgl_lahir . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->alamat . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->nama_ortu . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->nik_ortu . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->lokasi . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->ket . '</td>
                <td style="border: 1px solid; font-size: 10px; padding:5px;">' . $tampil->status . '</td>
            </tr>';
        }
        $data = DB::table('data_arsip')->count();
        $output .= '
            <tr>
                <td align="right" colspan="15" style="border: 1px solid; font-size: 10px;padding:3px;">
                    <div align="right" ><b>Jumlah Record</b></div>
                </td>
                <td align="right" colspan="1" style="border: 1px solid; font-size: 14px; padding:3px;">
                    <div align="center"><b>' . $data . '</b></div>
                </td>
            </tr>';

        $output .= '</table>';
        return $output;
    }
}
