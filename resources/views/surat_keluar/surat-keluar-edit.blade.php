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
                <form action="{{ route('arsip.u', $data_arsip->id)}}" method="POST">
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
                          value="{{ $data_arsip->kode_klarifikasi}}"
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
                          value="{{ $data_arsip->no_register}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tahun')
                            class="text-danger"
                        @enderror>Nama Barang
                          @error('tahun')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="tahun" 
                        @if (old('tahun'))
                          value="{{ old('tahun')}}"
                        @else
                          value="{{ $data_arsip->tahun}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('jenis_arsip')
                            class="text-danger"
                        @enderror>Jenis Arsip
                          @error('jenis_arsip')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="jenis_arsip" 
                        @if (old('jenis_arsip'))
                          value="{{ old('jenis_arsip')}}"
                        @else
                          value="{{ $data_arsip->jenis_arsip}}"
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