@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                {{-- <div class="card-header">
                  <h4>HTML5 Form Basic</h4>
                </div> --}}
                <div class="card-body">
                  {{-- <div class="alert alert-info">
                    <b>Note!</b> Not all browsers support HTML5 type input.
                  </div> --}}
                <form action="{{ route('op-buku.u', $opname_buku->id)}}" method="POST">
                  @csrf
                  @method('patch')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_klarifikasi')
                            class="text-danger"
                        @enderror>Kode Klasifikasi
                          @error('kode_klarifikasi')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="kode_klarifikasi"
                          @if (old('kode_klarifikasi'))
                            value="{{ old('kode_klarifikasi')}}"
                          @else
                            value="{{ $opname_buku->kode_klarifikasi}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_buku')
                            class="text-danger"
                        @enderror>No buku
                          @error('no_buku')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="no_buku"
                          @if (old('no_buku'))
                            value="{{ old('no_buku')}}"
                          @else
                            value="{{ $opname_buku->no_buku}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>                  

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_register')
                            class="text-danger"
                        @enderror>No Register
                          @error('no_register')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="no_register"
                          @if (old('no_register'))
                            value="{{ old('no_register')}}"
                          @else
                            value="{{ $opname_buku->no_register}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div> 

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tahun')
                            class="text-danger"
                        @enderror>Kurun Waktu/Tahun
                          @error('tahun')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="tahun"
                          @if (old('tahun'))
                            value="{{ old('tahun')}}"
                          @else
                            value="{{ $opname_buku->tahun}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kategori_buku')
                            class="text-danger"
                        @enderror>Kategori buku
                          @error('kategori_buku')
                              | {{ $message}}
                          @enderror
                        </label>
                          <select class="form-control" name="kategori_buku" 
                          @if (old('kategori_buku'))
                            value="{{ old('kategori_buku')}}"
                          @else
                            value="{{ $opname_buku->kategori_buku}}"
                          @endif>
                            <option selected>Kategori Buku</option>
                            <option value="Umum">Umum</option>
                            <option value="Terlambat I">Terlambat I</option>
                            <option value="Terlambat II">Terlambat II</option>
                            <option value="Istimewa">Istimewa</option>
                            <option value="Pemutihan">Pemutihan</option>
                            <option value="IN">IN</option>
                            <option value="China">China</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('uraian')
                            class="text-danger"
                        @enderror>Uraian Informasi
                          @error('uraian')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="uraian"
                          @if (old('uraian'))
                            value="{{ old('uraian')}}"
                          @else
                            value="{{ $opname_buku->uraian}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('jml_buku')
                            class="text-danger"
                        @enderror>Jumlah Buku
                          @error('jml_buku')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="jml_buku"
                          @if (old('jml_buku'))
                            value="{{ old('jml_buku')}}"
                          @else
                            value="{{ $opname_buku->jml_buku}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('lokasi')
                            class="text-danger"
                        @enderror>Lokasi Penyimpanan
                          @error('lokasi')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="lokasi"
                          @if (old('lokasi'))
                            value="{{ old('lokasi')}}"
                          @else
                            value="{{ $opname_buku->lokasi}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('ket')
                            class="text-danger"
                        @enderror>Keterangan
                          @error('ket')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="ket"
                          @if (old('ket'))
                            value="{{ old('ket')}}"
                          @else
                            value="{{ $opname_buku->ket}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tingkat_perkembangan')
                            class="text-danger"
                        @enderror>Tingkat Perkembangan
                          @error('tingkat_perkembangan')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="tingkat_perkembangan"
                          @if (old('tingkat_perkembangan'))
                            value="{{ old('tingkat_perkembangan')}}"
                          @else
                            value="{{ $opname_buku->tingkat_perkembangan}}"
                          @endif 
                          class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush
