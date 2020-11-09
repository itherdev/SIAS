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
                <form action="{{ route('surat-keluar.u', $surat_keluar->id)}}" method="POST">
                  @csrf
                  @method('patch')
                  <div class="row">
                   
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_surat')
                            class="text-danger"
                        @enderror>No Surat
                          @error('no_surat')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="no_surat" class="form-control"
                        @if (old('no_surat'))
                          value="{{ old('no_surat')}}"
                        @else
                          value="{{ $surat_keluar->no_surat}}"
                        @endif >
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tgl_surat')
                            class="text-danger"
                        @enderror>Tangal Surat
                          @error('tgl_surat')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type=date name="tgl_surat" class="form-control"
                        @if (old('tgl_surat'))
                          value="{{ old('tgl_surat')}}"
                        @else
                          value="{{ $surat_keluar->tgl_surat}}"
                        @endif >
                      </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label @error('pengolah')
                          class="text-danger"
                      @enderror>Pengolah
                        @error('pengolah')
                            | {{ $message}}
                        @enderror
                      </label>
                      <input type="text" name="pengolah" class="form-control"
                      @if (old('pengolah'))
                          value="{{ old('pengolah')}}"
                        @else
                          value="{{ $surat_keluar->pengolah}}"
                        @endif >
                    </div>
                  </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label @error('tujuan_surat')
                        class="text-danger"
                    @enderror>tujuan Surat
                      @error('tujuan_surat')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="tujuan_surat" class="form-control" 
                    @if (old('tujuan_surat'))
                          value="{{ old('tujuan_surat')}}"
                        @else
                          value="{{ $surat_keluar->tujuan_surat}}"
                        @endif >
                  </div>
                </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label @error('perihal')
                      class="text-danger"
                  @enderror>Perihal
                    @error('perihal')
                        | {{ $message}}
                    @enderror
                  </label>
                  <input type="text" name="perihal" class="form-control"
                  @if (old('perihal'))
                          value="{{ old('perihal')}}"
                        @else
                          value="{{ $surat_keluar->perihal}}"
                        @endif >
                </div>
              </div>

            <div class="col-md-6">
              <div class="form-group">
                <label @error('keterangan')
                    class="text-danger"
                @enderror>Keterangan
                  @error('keterangan')
                      | {{ $message}}
                  @enderror
                </label>
                <input type="text" name="keterangan" class="form-control"
                @if (old('keterangan'))
                          value="{{ old('keterangan')}}"
                        @else
                          value="{{ $surat_keluar->keterangan}}"
                        @endif >
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