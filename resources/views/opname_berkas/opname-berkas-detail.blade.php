@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Opname Berkas</h4>
                        <b>{{ $opname_berkas->no_berkas}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('op-berkas.v', $opname_berkas->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">Kode Klasifikasi</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->kode_klarifikasi}}</dd>

                            <dt class="col-sm-3">No Berkas</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->no_berkas}}</dd>

                            <dt class="col-sm-3">Tahun</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->tahun}}</dd>

                            <dt class="col-sm-3">Kategori Berkas</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->kategori_berkas}}</dd>

                            <dt class="col-sm-3">Uraian Informasi</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->uraian_berkas}}</dd>

                            <dt class="col-sm-3">Jumlah Berkas</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->jml_berkas}}</dd>

                            <dt class="col-sm-3">Jumlah Berkas Ada</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->jml_berkasada}}</dd>

                            <dt class="col-sm-3">Jumlah Berkas Tidak Ada</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->jml_berkastidakada}}</dd>

                            <dt class="col-sm-3">Jumlah Boks</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->jml_boks}}</dd>

                            <dt class="col-sm-3">No Boks</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->no_boks}}</dd>

                            <dt class="col-sm-3">Lokasi Penyimpanan</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->lokasi}}</dd>

                            <dt class="col-sm-3">Keterangan</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->ket}}</dd>

                            <dt class="col-sm-3">Tingkat Perkembangan</dt>
                            <dd class="col-sm-9">: {{ $opname_berkas->tingkat_perkembangan}}</dd>
                        </dl>
                
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush