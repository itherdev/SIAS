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

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nik')
                            class="text-danger"
                        @enderror>NIK
                          @error('nik')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="number" name="nik" 
                        @if (old('nik'))
                          value="{{ old('nik')}}"
                        @else
                          value="{{ $data_arsip->nik}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>
                    {{-- okee --}}

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama')
                            class="text-danger"
                        @enderror>Nama
                          @error('nama')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="nama" 
                        @if (old('nama'))
                          value="{{ old('nama')}}"
                        @else
                          value="{{ $data_arsip->nama}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('jenis_kelamin')
                            class="text-danger"
                        @enderror>Jenis Kelamin
                          @error('jenis_kelamin')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="jenis_kelamin" 
                        @if (old('jenis_kelamin'))
                          value="{{ old('jenis_kelamin')}}"
                        @else
                          value="{{ $data_arsip->jenis_kelamin}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tempat')
                            class="text-danger"
                        @enderror>Tempat
                          @error('tempat')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="tempat" 
                        @if (old('tempat'))
                          value="{{ old('tempat')}}"
                        @else
                          value="{{ $data_arsip->tempat}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tgl_lahir')
                            class="text-danger"
                        @enderror>Tanggal Lahir
                          @error('tgl_lahir')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="date" name="tgl_lahir" 
                        @if (old('tgl_lahir'))
                          value="{{ old('tgl_lahir')}}"
                        @else
                          value="{{ $data_arsip->tgl_lahir}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('alamat')
                            class="text-danger"
                        @enderror>Alamat
                          @error('alamat')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="alamat" 
                        @if (old('alamat'))
                          value="{{ old('alamat')}}"
                        @else
                          value="{{ $data_arsip->alamat}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_ortu')
                            class="text-danger"
                        @enderror>Nama Orang Tua
                          @error('nama_ortu')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="nama_ortu" 
                        @if (old('nama_ortu'))
                          value="{{ old('nama_ortu')}}"
                        @else
                          value="{{ $data_arsip->nama_ortu}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nik_ortu')
                            class="text-danger"
                        @enderror>Nik Orang Tua
                          @error('nik_ortu')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="number" name="nik_ortu" 
                        @if (old('nik_ortu'))
                          value="{{ old('nik_ortu')}}"
                        @else
                          value="{{ $data_arsip->nik_ortu}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('lokasi')
                            class="text-danger"
                        @enderror>Lokasi
                          @error('lokasi')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="lokasi" 
                        @if (old('lokasi'))
                          value="{{ old('lokasi')}}"
                        @else
                          value="{{ $data_arsip->lokasi}}"
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
                          value="{{ $data_arsip->ket}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('status')
                            class="text-danger"
                        @enderror>Status
                          @error('status')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="status" 
                        @if (old('status'))
                          value="{{ old('status')}}"
                        @else
                          value="{{ $data_arsip->status}}"
                        @endif 
                        class="form-control">
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
                        <input type="file" name="lampiran" 
                        @if (old('lampiran'))
                          value="{{ old('lampiran')}}"
                        @else
                        value="{{ old('lampiran')}}" 
                        @endif
                        class="custom-file-input" id="inputGroupFile02">
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