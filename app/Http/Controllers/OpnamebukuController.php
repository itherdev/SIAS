<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\Types\This;

class OpnamebukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opname_buku = DB::table('opname_buku')->paginate(3);
        return view('opname_buku.opname-buku', ['opname_buku' => $opname_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opname_buku.opname-buku-tambah');
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

        DB::table('opname_buku')->insert([
            [
                'kode_klarifikasi' => $request->kode_klarifikasi,
                'no_buku' => $request->no_buku,
                'no_register' => $request->no_register,
                'tahun' => $request->tahun,
                'kategori_buku' => $request->kategori_buku,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket,
                'tingkat_perkembangan' => $request->tingkat_perkembangan
            ],

        ]);

        return redirect()->route('op-buku')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'kode_klarifikasi' => 'required|max:10|min:3',
            'no_buku' => 'required|max:10|min:3',
            'no_register' => 'request',
            'tahun' => 'request',
            'kategori_buku' => 'required|max:100|min:3',
            'lokasi' => 'required|max:100|min:3',
            'ket' => 'required|max:100|min:3',
            'tingkat_perkembangan' => 'request|max:100|min:2'
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
        $opname_buku = DB::table('opname_buku')->where('id', $id)->first();
        return view('opname_buku.opname-buku-edit', ['opname_buku' => $opname_buku]);
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
        DB::table('opname_buku')->where('id', $id)->update([
            'kode_klarifikasi' => $request->kode_klarifikasi,
            'no_buku' => $request->no_buku,
            'no_register' => $request->no_register,
            'tahun' => $request->tahun,
            'kategori_buku' => $request->kategori_buku,
            'lokasi' => $request->lokasi,
            'ket' => $request->ket,
            'tingkat_perkembangan' => $request->tingkat_perkembangan

        ]);
        return redirect()->route('op-buku')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('opname_buku')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
