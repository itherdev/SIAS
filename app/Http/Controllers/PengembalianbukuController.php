<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengembalianbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian_buku = DB::table('pengembalian_buku')->paginate(10);
        return view('pengembalian_buku.pengembalian-buku', ['pengembalian_buku' => $pengembalian_buku]);
    }

    public function cetak()
    {
        $pengembalian_buku = DB::table('pengembalian_buku')->paginate(15);
        return view('pengembalian_buku.pengembalian-buku-laporan', ['pengembalian_buku' => $pengembalian_buku]);
    }

    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pengembalian_buku = DB::table('pengembalian_buku')
            ->where('no_buku', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('pengembalian_buku.pengembalian-buku', ['pengembalian_buku' => $pengembalian_buku]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengembalian_buku.pengembalian-buku-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);

        DB::table('pengembalian_buku')->insert([
            [
                'no_buku' => $request->no_buku,
                'no_register' => $request->no_register,
                'tgl_kembali' => $request->tgl_kembali,
                'jenis_arsip' => $request->jenis_arsip,
                'tahun' => $request->tahun,
                'jml_berkas' => $request->jml_berkas,
                'nama_peminjam' => $request->nama_peminjam,
                'unit_pengolah' => $request->unit_pengolah,
                'nama_petugas' => $request->nama_petugas,
                'kategori_petugas' => $request->kategori_petugas,
                'status' => $request->status
            ],

        ]);

        return redirect()->route('pengembalian-buku')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'no_buku' => 'required|max:20|min:3',
            'no_register' => 'required|max:20|min:3',
            'jenis_arsip' => 'required|max:100|min:3',
            'jml_berkas' => 'required',
            'nama_peminjam' => 'required',
            'unit_pengolah' => 'required',
            'nama_petugas' => 'required',
            'kategori_petugas' => 'required',
            'status' => 'required|max:50|min:2'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengembalian_buku = DB::table('pengembalian_buku')->where('id', $id)->first();
        return view('pengembalian_buku.pengembalian-buku-detail', ['pengembalian_buku' => $pengembalian_buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengembalian_buku = DB::table('pengembalian_buku')->where('id', $id)->first();
        return view('pengembalian_buku.pengembalian-buku-edit', ['pengembalian_buku' => $pengembalian_buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->_validation($request);
        DB::table('pengembalian_buku')->where('id', $id)->update([
            'no_buku' => $request->no_buku,
            'no_register' => $request->no_register,
            'tgl_kembali' => $request->tgl_kembali,
            'jenis_arsip' => $request->jenis_arsip,
            'tahun' => $request->tahun,
            'jml_berkas' => $request->jml_berkas,
            'nama_peminjam' => $request->nama_peminjam,
            'unit_pengolah' => $request->unit_pengolah,
            'nama_petugas' => $request->nama_petugas,
            'kategori_petugas' => $request->kategori_petugas,
            'status' => $request->status
        ]);
        return redirect()->route('pengembalian-buku')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengembalian_buku')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
