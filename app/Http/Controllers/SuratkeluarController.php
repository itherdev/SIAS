<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_keluar = DB::table('surat_keluar')->paginate(5);
        return view('surat_keluar.surat-keluar', ['surat_keluar' => $surat_keluar]);
    }

    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $surat_keluar = DB::table('surat_keluar')
            ->where('tujuan_surat', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('surat_keluar.surat-keluar', ['surat_keluar' => $surat_keluar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_keluar.surat-keluar-tambah');
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

        DB::table('surat_keluar')->insert([
            [
                'no_surat' => $request->no_surat,
                'tgl_surat' => $request->tgl_surat,
                'pengolah' => $request->pengolah,
                'tujuan_surat' => $request->tujuan_surat,
                'perihal' => $request->perihal,
                'keterangan' => $request->keterangan
            ],

        ]);

        return redirect()->route('surat-keluar')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'tujuan_surat' => 'required',
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
        $surat_keluar = DB::table('surat_keluar')->where('id', $id)->first();
        return view('surat_keluar.surat-keluar-detail', ['surat_keluar' => $surat_keluar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_keluar = DB::table('surat_keluar')->where('id', $id)->first();
        return view('surat_keluar.surat-keluar-edit', ['surat_keluar' => $surat_keluar]);
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
        DB::table('surat_keluar')->where('id', $id)->update([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'pengolah' => $request->pengolah,
            'tujuan_surat' => $request->tujuan_surat,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('surat-keluar')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('surat_keluar')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
