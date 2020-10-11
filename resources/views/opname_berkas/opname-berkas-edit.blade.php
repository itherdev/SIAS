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
                        <label @error('kode_barang')
                            class="text-danger"
                        @enderror>Kode Barang
                          @error('kode_barang')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="kode_barang"
                        @if (old('kode_barang'))
                          value="{{ old('kode_barang')}}"
                        @else
                          value="{{ $opname_berkas->kode_barang}}"
                        @endif
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_barang')
                            class="text-danger"
                        @enderror>Nama Barang
                          @error('nama_barang')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="nama_barang"
                        @if (old('nama_barang'))
                          value="{{ old('nama_barang')}}"
                        @else
                          value="{{ $opname_berkas->nama_barang}}"
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
