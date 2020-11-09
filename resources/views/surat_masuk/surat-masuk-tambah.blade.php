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
                <div class="card-header">
                  <h4>Surat Masuk</h4>
                </div>
                <div class="card-body">
                  {{-- <div class="alert alert-info">
                    <b>Note!</b> Not all browsers support HTML5 type input.
                  </div> --}}
                <form action="{{ route('surat-masuk.s')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('no_agenda')
                            class="text-danger"
                        @enderror>No Agenda
                          @error('no_agenda')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="no_agenda" value="{{ old('no_agenda')}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('no_surat')
                            class="text-danger"
                        @enderror>No Surat
                          @error('no_surat')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="no_surat" value="{{ old('no_surat')}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('tgl_surat')
                            class="text-danger"
                        @enderror>Tangal Surat
                          @error('tgl_surat')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type=date name="tgl_surat" value="{{ old('tgl_surat')}}" class="form-control">
                      </div>
                    </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label @error('tgl_terima')
                          class="text-danger"
                      @enderror>Tanggal Terima
                        @error('tgl_terima')
                            | {{ $message}}
                        @enderror
                      </label>
                      <input type="date" name="tgl_terima" value="{{ old('tgl_terima')}}" class="form-control">
                    </div>
                  </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('sumber_surat')
                        class="text-danger"
                    @enderror>Sumber Surat
                      @error('sumber_surat')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="sumber_surat" value="{{ old('sumber_surat')}}" class="form-control">
                  </div>
                </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label @error('perihal')
                      class="text-danger"
                  @enderror>Perihal
                    @error('perihal')
                        | {{ $message}}
                    @enderror
                  </label>
                  <input type="text" name="perihal" value="{{ old('perihal')}}" class="form-control">
                </div>
              </div>

            <div class="col-md-12">
              <div class="form-group">
                <label @error('keterangan')
                    class="text-danger"
                @enderror>Keterangan
                  @error('keterangan')
                      | {{ $message}}
                  @enderror
                </label>
                <input type="text" name="keterangan" value="{{ old('keterangan')}}" class="form-control">
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