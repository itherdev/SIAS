<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

use function GuzzleHttp\Promise\all;

class CrudController extends Controller
{
    public function index()
    {
        $data_barang = DB::table('data_barang')->paginate(3);
        return view('crud.crud', ['data_barang' => $data_barang]);
    }

    public function tambah()
    {
        return view('crud.crud-tambah');
    }

    public function simpan(Request $request)
    {
        //dd($request->all());
        // DB::insert('insert into data_barang (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);

        // $validation = $request->validate([
        //     'kode_barang' => 'required|max:10|min:3',
        //     'nama_barang' => 'required|max:100|min:3'
        // ]);
        $this->_validation($request);

        DB::table('data_barang')->insert([
            ['kode_barang' => $request->kode_barang, 'nama_barang' => $request->nama_barang],
            // ['kode_barang' => $request->kode_barang . 'xx', 'nama_barang' => $request->nama_barang . 'xx'],
        ]);

        return redirect()->route('crud')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'kode_barang' => 'required|max:10|min:3',
            'nama_barang' => 'required|max:100|min:3'
        ]);
    }

    public function edit($id)
    {
        $data_barang = DB::table('data_barang')->where('id', $id)->first();
        return view('crud.crud-edit', ['data_barang' => $data_barang]);
    }


    public function delete($id)
    {
        DB::table('data_barang')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        DB::table('data_barang')->where('id', $id)->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang
        ]);
        return redirect()->route('crud')->with('message', 'Data berhasil diupdate');
    }
}
