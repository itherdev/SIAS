@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Arsip</h4>
                        <b>{{ $data_arsip->no_register}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('arsip.v', $data_arsip->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">Kode Klarifikasi</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->kode_klarifikasi}}</dd>

                            <dt class="col-sm-3">No Register</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->no_register}}</dd>

                            <dt class="col-sm-3">Tahun</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->tahun}}</dd>

                            <dt class="col-sm-3">NIK</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->nik}}</dd>

                            <dt class="col-sm-3">Nama</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->nama}}</dd>

                            <dt class="col-sm-3">Jenis Kelamin</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->jenis_kelamin}}</dd>

                            <dt class="col-sm-3">Tempat</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->tempat}}</dd>

                            <dt class="col-sm-3">Tanggal Lahir</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->tgl_lahir}}</dd>

                            <dt class="col-sm-3">Alamat</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->alamat}}</dd>

                            <dt class="col-sm-3">Nama Orang Tua</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->nama_ortu}}</dd>

                            <dt class="col-sm-3">Nik Orang Tua</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->nik_ortu}}</dd>

                            <dt class="col-sm-3">Lokasi</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->lokasi}}</dd>

                            <dt class="col-sm-3">Keterangan</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->ket}}</dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->status}}</dd>

                            <dt class="col-sm-3">Lampiran</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->lampiran}}</dd>
                        </dl>
                
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush