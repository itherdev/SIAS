<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PeminjamanberkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman_berkas = DB::table('peminjaman_berkas')->paginate(10);
        return view('peminjaman_berkas.peminjaman-berkas', ['peminjaman_berkas' => $peminjaman_berkas]);
    }

    public function cetak()
    {
        $peminjaman_berkas = DB::table('peminjaman_berkas')->paginate(15);
        return view('peminjaman_berkas.peminjaman-berkas-laporan', ['peminjaman_berkas' => $peminjaman_berkas]);
    }

    // //Print 
    // public function print()
    // {
    //     $peminjaman_berkas = DB::table('peminjaman_berkas')

    //     $pdf = PDF::loadview('peminjaman_berkas.peminjaman-berkas-laporan', ['peminjaman_berkas' => $peminjaman_berkas]);
    //     return $pdf->download('laporan-pegawai-pdf');
    // }


    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $peminjaman_berkas = DB::table('peminjaman_berkas')
            ->where('no_berkas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('peminjaman_berkas.peminjaman-berkas', ['peminjaman_berkas' => $peminjaman_berkas]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman_berkas.peminjaman-berkas-tambah');
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

        DB::table('peminjaman_berkas')->insert([
            [
                'no_berkas' => $request->no_berkas,
                'tgl_pinjam' => $request->tgl_pinjam,
                'uraian_berkas' => $request->uraian_berkas,
                'tahun' => $request->tahun,
                'jml_berkas' => $request->jml_berkas,
                'nama_peminjam' => $request->nama_peminjam,
                'unit_pengolah' => $request->unit_pengolah,
                'nama_petugas' => $request->nama_petugas,
                'kategori_petugas' => $request->kategori_petugas,
                'status' => $request->status
            ],

        ]);

        return redirect()->route('peminjaman-berkas')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'no_berkas' => 'required|max:20|min:3',
            'uraian_berkas' => 'required|max:100|min:3',
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
        $peminjaman_berkas = DB::table('peminjaman_berkas')->where('id', $id)->first();
        return view('peminjaman_berkas.peminjaman-berkas-detail', ['peminjaman_berkas' => $peminjaman_berkas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman_berkas = DB::table('peminjaman_berkas')->where('id', $id)->first();
        return view('peminjaman_berkas.peminjaman-berkas-edit', ['peminjaman_berkas' => $peminjaman_berkas]);
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
        DB::table('peminjaman_berkas')->where('id', $id)->update([
            'no_berkas' => $request->no_berkas,
            'tgl_pinjam' => $request->tgl_pinjam,
            'uraian_berkas' => $request->uraian_berkas,
            'tahun' => $request->tahun,
            'jml_berkas' => $request->jml_berkas,
            'nama_peminjam' => $request->nama_peminjam,
            'unit_pengolah' => $request->unit_pengolah,
            'nama_petugas' => $request->nama_petugas,
            'kategori_petugas' => $request->kategori_petugas,
            'status' => $request->status
        ]);
        return redirect()->route('peminjaman-berkas')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('peminjaman_berkas')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
