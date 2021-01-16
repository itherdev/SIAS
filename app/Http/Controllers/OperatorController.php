<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operator = DB::table('operator')->paginate(5);
        return view('operator.operator', ['operator' => $operator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operator.operator-tambah');
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

        DB::table('operator')->insert([
            [
                'id_op' => $request->id_op,
                'nm_op' => $request->nm_op,
                'level' => $request->level
            ],

        ]);

        return redirect()->route('operator')->with('message', 'Data berhasil disimpan');
    }
    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'id_op' => 'required|max:10|min:3',
            'nm_op' => 'required|max:10|min:3',

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
        $operator = DB::table('operator')->where('id', $id)->first();
        return view('operator.operator-detail', ['operator' => $operator]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operator = DB::table('operator')->where('id', $id)->first();
        return view('operator.operator-edit', ['operator' => $operator]);
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
        DB::table('operator')->where('id', $id)->update([
            'id_op' => $request->id_op,
            'nm_op' => $request->nm_op,
            'lavel' => $request->lavel
        ]);
        return redirect()->route('operator')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('operator')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
