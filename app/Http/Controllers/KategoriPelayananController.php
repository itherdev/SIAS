<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriPelayananController extends Controller
{
  public function index()
  {
      //
      $data_kategori = DB::table('kategori_pelayanan')->paginate(5);
      return view('kategori.kategori', ['data_kategori' => $data_kategori]);
  }
  public function create()
  {
      //
  }
  public function tambah()
  {
    $data_kategori = DB::table('kategori_pelayanan')->paginate(5);
    return view('kategori.kategori', ['data_kategori' => $data_kategori]);
  }
  public function store(Request $request)
  {
      //
  }
  public function show($id)
  {
      //
  }
  public function edit($id)
  {
      //
  }
  public function update(Request $request, $id)
  {
      //
  }
  public function destroy($id)
  {
      //
  }
}
