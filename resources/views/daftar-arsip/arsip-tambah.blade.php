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
                <form action="{{ route('arsip.s')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('kode_klarifikasi')
                            class="text-danger"
                        @enderror>Kode Klarifikasi
                          @error('kode_klarifikasi')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="kode_klarifikasi" value="{{ old('kode_klarifikasi')}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label @error('no_register')
                            class="text-danger"
                        @enderror>No Register
                          @error('no_register')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="no_register" value="{{ old('no_register')}}" class="form-control">
                      </div>
                    </div>
                  

                  <div class="col-md-12">
                    <div class="form-group">
                      <label @error('tahun')
                          class="text-danger"
                      @enderror>Tahun
                        @error('tahun')
                            | {{ $message}}
                        @enderror
                      </label>
                      <input type="text" name="tahun" value="{{ old('tahun')}}" class="form-control">
                    </div>
                  </div>
                

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('jenis_arsip')
                        class="text-danger"
                    @enderror>Jenis Arsip
                      @error('jenis_arsip')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="jenis_arsip" value="{{ old('jenis_arsip')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('nik')
                        class="text-danger"
                    @enderror>NIK
                      @error('nik')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="nik" value="{{ old('nik')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('nama')
                        class="text-danger"
                    @enderror>Nama
                      @error('nama')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="nama" value="{{ old('nama')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('jenis_kelamin')
                        class="text-danger"
                    @enderror>Jenis Kelamin
                      @error('jenis_kelamin')
                          | {{ $message}}
                      @enderror
                    </label>
                    
                    <select class="form-control" name="jenis_kelamin" value="{{ old('jenis_kelamin')}}">
                      <option selected>Jenis Kelamin</option>
                      <option value="p">Perempuan</option>
                      <option value="l">Laki-Laki</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('tempat')
                        class="text-danger"
                    @enderror>Tempat
                      @error('tempat')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="tempat" value="{{ old('tempat')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('tgl_lahir')
                        class="text-danger"
                    @enderror>Tanggal Lahir
                      @error('tgl_lahir')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('alamat')
                        class="text-danger"
                    @enderror>Alamat
                      @error('alamat')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="alamat" value="{{ old('alamat')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('nama_ortu')
                        class="text-danger"
                    @enderror>Nama Orang Tua
                      @error('nama_ortu')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="nama_ortu" value="{{ old('nama_ortu')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('nik_ortu')
                        class="text-danger"
                    @enderror>NIK Orang Tua
                      @error('nik_ortu')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="number" name="nik_ortu" value="{{ old('nik_ortu')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('lokasi')
                        class="text-danger"
                    @enderror>Lokasi Penyimpanan
                      @error('lokasi')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="lokasi" value="{{ old('lokasi')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('ket')
                        class="text-danger"
                    @enderror>Keterangan
                      @error('ket')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="ket" value="{{ old('ket')}}" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label @error('status')
                        class="text-danger"
                    @enderror>Status
                      @error('status')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="text" name="status" value="{{ old('status')}}" class="form-control">
                  </div>
                </div>

                <span class="padding-4"><b>Lampiran</b></span><br>
                <div class="input-group col-md-12">
                  <div class="custom-file">
                    <label @error('lampiran')
                        class="text-danger"
                    @enderror>Lampiran
                      @error('lampiran')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="file" name="lampiran" value="{{ old('lampiran')}}" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Lampirkan Arsip</label>
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