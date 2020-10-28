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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('no_berkas')
                            class="text-danger"
                        @enderror>No Berkas
                          @error('no_berkas')
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

                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('tgl_pinjam')
                            class="text-danger"
                        @enderror>Tanggal Pinjam
                          @error('tgl_pinjam')
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
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label @error('jml_berkas')
                          class="text-danger"
                      @enderror>Jumlah Berkas
                        @error('jml_berkas')
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
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('nama_peminjam')
                        class="text-danger"
                    @enderror>Nama Peminjam
                      @error('nama_peminjam')
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
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label @error('uraian')
                      class="text-danger"
                  @enderror>uraian
                    @error('uraian')
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
            </div>

            <div class="col-md-12">
                <div class="form-group">
                  <label @error('unit_pengolah')
                      class="text-danger"
                  @enderror>Unit Pengolah
                    @error('unit_pengolah')
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
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label @error('nama_petugas')
                    class="text-danger"
                @enderror>Nama Petugas
                  @error('nama_petugas')
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
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label @error('kategori_petugas')
                  class="text-danger"
              @enderror>Kategori Petugas
                @error('kategori_petugas')
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
        </div>


        <div class="col-md-12">
          <div class="form-group">
            <label @error('status')
                class="text-danger"
            @enderror>status
              @error('status')
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