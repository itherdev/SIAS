@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Opname Buku</h4>
                        <b>{{ $opname_buku->no_buku}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('op-buku.v', $opname_buku->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">Kode Klasifikasi</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->kode_klarifikasi}}</dd>

                            <dt class="col-sm-3">No buku</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->no_buku}}</dd>

                            <dt class="col-sm-3">No Register</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->no_register}}</dd>

                            <dt class="col-sm-3">Kurun Waktu/Tahun</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->tahun}}</dd>

                            <dt class="col-sm-3">Kategori buku</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->kategori_buku}}</dd>

                            <dt class="col-sm-3">Uraian Informasi</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->uraian}}</dd>

                            <dt class="col-sm-3">Jumlah Buku</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->jml_buku}}</dd>
                            
                            <dt class="col-sm-3">Lokasi</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->lokasi}}</dd>

                            <dt class="col-sm-3">Keterangan</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->ket}}</dd>

                            <dt class="col-sm-3">Tingkat Perkembangan</dt>
                            <dd class="col-sm-9">: {{ $opname_buku->tingkat_perkembangan}}</dd>
                        </dl>
                
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush