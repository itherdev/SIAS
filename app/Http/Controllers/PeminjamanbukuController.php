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
                'no_buku' => $request->no_buku,
                'no_register' => $request->no_register,
                'tgl_pinjam' => $request->tgl_pinjam,
                'jml_buku' => $request->jml_buku,
                'nama_peminjam' => $request->nama_peminjam,
                'uraian' => $request->uraian,
                'unit_pengolah' => $request->unit_pengolah,
                'nama_petugas' => $request->nama_petugas,
                'kategori_petugas' => $request->kategori_petugas,
                'status' => $request->status
            ],

        ]);

        return redirect()->route('peminjaman-arsip/buku')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'no_buku' => 'required|max:10|min:3',
            'nama_peminjam' => 'required|max:100|min:3',
            'uraian' => 'required|max:100|min:3',
            'nama_petugas' => 'required|max:50|min:3',
            'status' => 'required|max:100|min:3'
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
            'no_buku' => $request->no_buku,
            'no_register' => $request->no_register,
            'tgl_pinjam' => $request->tgl_pinjam,
            'jml_buku' => $request->jml_buku,
            'nama_peminjam' => $request->nama_peminjam,
            'uraian' => $request->uraian,
            'unit_pengolah' => $request->unit_pengolah,
            'nama_petugas' => $request->nama_petugas,
            'kategori_petugas' => $request->kategori_petugas,
            'status' => $request->status
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
