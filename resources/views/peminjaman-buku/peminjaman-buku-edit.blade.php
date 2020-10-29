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
                <form action="{{ route('op-berkas.u', $opname_berkas->id)}}" method="POST">
                  @csrf
                  @method('patch')
                
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('kode_klarifikasi')
                                class="text-danger"
                            @enderror>Kode Klarifikasi
                              @error('kode_klarifikasi')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="kode_klarifikasi"
                              @if (old('kode_klarifikasi'))
                                value="{{ old('kode_klarifikasi')}}"
                              @else
                                value="{{ $opname_berkas->kode_klarifikasi}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('no_berkas')
                                class="text-danger"
                            @enderror>No Berkas
                              @error('no_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="no_berkas"
                              @if (old('no_berkas'))
                                value="{{ old('no_berkas')}}"
                              @else
                                value="{{ $opname_berkas->no_berkas}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>                  
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('tahun')
                                class="text-danger"
                            @enderror>Tahun
                              @error('tahun')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="tahun"
                              @if (old('tahun'))
                                value="{{ old('tahun')}}"
                              @else
                                value="{{ $opname_berkas->tahun}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('kategori_berkas')
                                class="text-danger"
                            @enderror>Kategori Berkas
                              @error('kategori_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="kategori_berkas"
                              @if (old('kategori_berkas'))
                                value="{{ old('kategori_berkas')}}"
                              @else
                                value="{{ $opname_berkas->kategori_berkas}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('uraian_berkas')
                                class="text-danger"
                            @enderror>Uraian Berkas
                              @error('uraian_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="uraian_berkas"
                              @if (old('uraian_berkas'))
                                value="{{ old('uraian_berkas')}}"
                              @else
                                value="{{ $opname_berkas->uraian_berkas}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('jml_berkas')
                                class="text-danger"
                            @enderror>jml_berkas
                              @error('jml_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="jml_berkas"
                              @if (old('jml_berkas'))
                                value="{{ old('jml_berkas')}}"
                              @else
                                value="{{ $opname_berkas->jml_berkas}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('jml_boks')
                                class="text-danger"
                            @enderror>Jumlah Boks
                              @error('jml_boks')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="jml_boks"
                              @if (old('jml_boks'))
                                value="{{ old('jml_boks')}}"
                              @else
                                value="{{ $opname_berkas->jml_boks}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('no_boks')
                                class="text-danger"
                            @enderror>No Boks
                              @error('no_boks')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="no_boks"
                              @if (old('no_boks'))
                                value="{{ old('no_boks')}}"
                              @else
                                value="{{ $opname_berkas->no_boks}}"
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
                                value="{{ $opname_berkas->lokasi}}"
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
                                value="{{ $opname_berkas->ket}}"
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
