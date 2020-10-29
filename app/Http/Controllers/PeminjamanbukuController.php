<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PeminjamanbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman_buku = DB::table('peminjaman_buku')->paginate(3);
        return view('peminjaman-buku.peminjaman-buku', ['peminjaman_buku' => $peminjaman_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman-buku.peminjaman-buku-tambah');
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

        DB::table('peminjaman_buku')->insert([
            [
                'kode_klarifikasi' => $request->kode_klarifikasi,
                'no_berkas' => $request->no_berkas,
                'tahun' => $request->tahun,
                'kategori_berkas' => $request->kategori_berkas,
                'uraian_berkas' => $request->uraian_berkas,
                'jml_berkas' => $request->jml_berkas,
                'jml_boks' => $request->jml_boks,
                'no_boks' => $request->no_boks,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket
            ],

        ]);

        return redirect()->route('peminjaman-arsip/buku')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'kode_klarifikasi' => 'required|max:10|min:3',
            'no_berkas' => 'required|max:10|min:3',
            'kategori_berkas' => 'required|max:100|min:3',
            'uraian_berkas' => 'required|max:100|min:3',
            'jml_berkas' => 'required',
            'jml_boks' => 'required',
            'no_boks' => 'required',
            'lokasi' => 'required|max:100|min:3',
            'ket' => 'required|max:100|min:3'
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman_buku = DB::table('peminjaman_buku')->where('id', $id)->first();
        return view('peminjaman-buku.peminjaman-buku-edit', ['peminjaman_buku' => $peminjaman_buku]);
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
        DB::table('peminjaman_buku')->where('id', $id)->update([
            'kode_klarifikasi' => $request->kode_klarifikasi,
            'no_berkas' => $request->no_berkas,
            'tahun' => $request->tahun,
            'kategori_berkas' => $request->kategori_berkas,
            'uraian_berkas' => $request->uraian_berkas,
            'jml_berkas' => $request->jml_berkas,
            'jml_boks' => $request->jml_boks,
            'no_boks' => $request->no_boks,
            'lokasi' => $request->lokasi,
            'ket' => $request->ket
        ]);
        return redirect()->route('peminjaman-arsip/buku')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('peminjaman_buku')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
