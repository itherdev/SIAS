<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakpengembalianberkasController extends Controller
{
    function tampil()
    {
        $pengembalian_berkas = DB::table('pengembalian_berkas')
            ->limit(10)
            ->get();
        return $pengembalian_berkas;
    }

    function pdf()
    {
        $pdf = \App::make('dompdf.wrapper')->setPaper('A4', 'landscape');
        $pdf->loadHTML($this->convert_pengembalian_berkas_to_html());
        return $pdf->stream();
    }

    function convert_pengembalian_berkas_to_html()
    {
        $pengembalian_berkas = $this->tampil();
        $Tglnow = date('d F Y');
        $output = '
        <h1 style="text-align : center;">Laporan Data Pengembalian Berkas</h1>
        <h4 style="text-align: right;">' . "Per Tanggal : " . $Tglnow . '</h4>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
            <tr>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >No</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >No Berkas</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Tgl Kembali</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Uraian Berkas</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Tahun</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Jumlah Berkas</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Nama Peminjam</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Unit Pengolah</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Nama Petugas</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Kategori Petugas</th>
                <th style="border: 1px solid; font-size: 14px; padding:5px;" >Status</th>
            </tr>';
        $no = 0;
        foreach ($pengembalian_berkas as $tampil) {
            $Tgl = date("d F Y", strtotime($tampil->tgl_kembali));
            $no++;
            $output .= '
            <tr>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $no . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->no_berkas . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->tgl_kembali . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->uraian_berkas . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->tahun . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->jml_berkas . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->nama_peminjam . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->unit_pengolah . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->nama_petugas . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->kategori_petugas . '</td>
                <td style="border: 1px solid; font-size: 14px; padding:5px;">' . $tampil->status . '</td>
            </tr>';
        }
        $data = DB::table('pengembalian_berkas')->count();
        $output .= '
            <tr>
                <td align="right" colspan="10" style="border: 1px solid; padding:3px;">
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
