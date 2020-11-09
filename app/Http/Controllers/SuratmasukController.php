<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_masuk = DB::table('surat_masuk')->paginate(5);
        return view('surat_masuk.surat-masuk', ['surat_masuk' => $surat_masuk]);
    }

    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $surat_masuk = DB::table('surat_masuk')
            ->where('sumber_surat', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('surat_masuk.surat-masuk', ['surat_masuk' => $surat_masuk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_masuk.surat-masuk-tambah');
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

        DB::table('surat_masuk')->insert([
            [
                'no_agenda' => $request->no_agenda,
                'no_surat' => $request->no_surat,
                'tgl_surat' => $request->tgl_surat,
                'tgl_terima' => $request->tgl_terima,
                'sumber_surat' => $request->sumber_surat,
                'perihal' => $request->perihal,
                'keterangan' => $request->keterangan
            ],

        ]);

        return redirect()->route('surat-masuk')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'tgl_terima' => 'required',
            'sumber_surat' => 'required'
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
        $surat_masuk = DB::table('surat_masuk')->where('id', $id)->first();
        return view('surat_masuk.surat-masuk-detail', ['surat_masuk' => $surat_masuk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_masuk = DB::table('surat_masuk')->where('id', $id)->first();
        return view('surat_masuk.surat-masuk-edit', ['surat_masuk' => $surat_masuk]);
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
        DB::table('surat_masuk')->where('id', $id)->update([
            'no_agenda' => $request->no_agenda,
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'tgl_terima' => $request->tgl_terima,
            'sumber_surat' => $request->sumber_surat,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('surat-masuk')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('surat_masuk')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }

    public function cetakForm()
    {
        return view('surat_masuk.surat-masuk-cetak');
    }
}
