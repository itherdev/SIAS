<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_arsip = DB::table('data_arsip')->paginate(5);
        return view('daftar-arsip.arsip', ['data_arsip' => $data_arsip]);
    }

    public function cetak()
    {
        $data_arsip = DB::table('data_arsip')->paginate(15);
        return view('daftar-arsip.arsip-laporan', ['data_arsip' => $data_arsip]);
    }

    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $data_arsip = DB::table('data_arsip')
            ->where('jenis_arsip', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('daftar-arsip.arsip', ['data_arsip' => $data_arsip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar-arsip.arsip-tambah');
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

        DB::table('data_arsip')->insert([
            [
                'kode_klarifikasi' => $request->kode_klarifikasi,
                'no_register' => $request->no_register,
                'tahun' => $request->tahun,
                'jenis_arsip' => $request->jenis_arsip
            ],

        ]);

        return redirect()->route('arsip')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'kode_klarifikasi' => 'required|max:10|min:3',
            'no_register' => 'required|max:10|min:3',
            'jenis_arsip' => 'required|max:100|min:3',
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
        $data_arsip = DB::table('data_arsip')->where('id', $id)->first();
        return view('daftar-arsip.arsip-detail', ['data_arsip' => $data_arsip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_arsip = DB::table('data_arsip')->where('id', $id)->first();
        return view('daftar-arsip.arsip-edit', ['data_arsip' => $data_arsip]);
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
        DB::table('data_arsip')->where('id', $id)->update([
            'kode_klarifikasi' => $request->kode_klarifikasi,
            'no_register' => $request->no_register,
            'tahun' => $request->tahun,
            'jenis_arsip' => $request->jenis_arsip
        ]);
        return redirect()->route('arsip')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_arsip')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
