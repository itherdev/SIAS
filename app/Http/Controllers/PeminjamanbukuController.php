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
        $peminjaman_buku = DB::table('peminjaman_buku')->paginate(10);
        return view('peminjaman_buku.peminjaman-buku', ['peminjaman_buku' => $peminjaman_buku]);
    }

    public function cetak()
    {
        $peminjaman_buku = DB::table('peminjaman_buku')->paginate(15);
        return view('peminjaman_buku.peminjaman-buku-laporan', ['peminjaman_buku' => $peminjaman_buku]);
    }

    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $peminjaman_buku = DB::table('peminjaman_buku')
            ->where('no_buku', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('peminjaman_buku.peminjaman-buku', ['peminjaman_buku' => $peminjaman_buku]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman_buku.peminjaman-buku-tambah');
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
                'uraian' => $request->uraian,
                'tahun' => $request->tahun,
                'jml_berkas' => $request->jml_berkas,
                'nama_peminjam' => $request->nama_peminjam,
                'unit_pengolah' => $request->unit_pengolah,
                'nama_petugas' => $request->nama_petugas,
                'kategori_petugas' => $request->kategori_petugas,
                'status' => $request->status
            ],

        ]);

        return redirect()->route('peminjaman-buku')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'no_buku' => 'required|max:20|min:3',
            'no_register' => 'required|max:20|min:3',
            'uraian' => 'required|max:100|min:3',
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
        $peminjaman_buku = DB::table('peminjaman_buku')->where('id', $id)->first();
        return view('peminjaman_buku.peminjaman-buku-detail', ['peminjaman_buku' => $peminjaman_buku]);
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
        return view('peminjaman_buku.peminjaman-buku-edit', ['peminjaman_buku' => $peminjaman_buku]);
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
            'uraian' => $request->uraian,
            'tahun' => $request->tahun,
            'jml_berkas' => $request->jml_berkas,
            'nama_peminjam' => $request->nama_peminjam,
            'unit_pengolah' => $request->unit_pengolah,
            'nama_petugas' => $request->nama_petugas,
            'kategori_petugas' => $request->kategori_petugas,
            'status' => $request->status
        ]);
        return redirect()->route('peminjaman-buku')->with('message', 'Data berhasil diupdate');
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
