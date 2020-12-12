<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class CetakopnamebukuController extends Controller
{
    function tampil()
    {
        $opname_buku = DB::table('opname_buku')
            ->limit(10)
            ->get();
        return $opname_buku;
    }

    function pdf()
    {
        $pdf = \App::make('dompdf.wrapper')->setPaper('A4', 'landscape');
        $pdf->loadHTML($this->convert_opname_buku_to_html());
        return $pdf->stream();
    }

    function convert_opname_buku_to_html()
    {
        $opname_buku = $this->tampil();
        $Tglnow = date('d F Y');
        $output = '
        <h1 style="text-align : center;">Laporan Data Stock Opname Buku</h1>
        <h4 style="text-align: right;">' . "Per Tanggal : " . $Tglnow . '</h4>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
            <tr>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >No</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Kode Klarifikasi</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >No buku</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >No Register</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Tahun</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Kategori buku</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Lokasi</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Keterangan</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Tingkat Perkembangan</th>
            </tr>';
        $no = 0;
        foreach ($opname_buku as $tampil) {
            $Tgl = date("d F Y", strtotime($tampil->tahun));
            $no++;
            $output .= '
            <tr>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $no . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->kode_klarifikasi . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->no_buku . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->no_register . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->tahun . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->kategori_buku . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->lokasi . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->ket . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->tingkat_perkembangan . '</td>
            </tr>';
        }
        $data = DB::table('opname_buku')->count();
        $output .= '
            <tr>
                <td align="right" colspan="8" style="border: 1px solid; padding:3px;">
                    <div align="right"><b>Jumlah Record</b></div>
                </td>
                <td align="right" colspan="1" style="border: 1px solid; padding:3px;">
                    <div align="center"><b>' . $data . '</b></div>
                </td>
            </tr>';

        $output .= '</table>';
        return $output;
    }
}
