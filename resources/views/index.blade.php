@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
     
     {{-- Dashboard atas --}}

    <div class="row">
          {{-- Arsip --}}
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Arsip</h4>
                </div>
                <div class="card-body">
                    <?php $data_arsip = DB::table('data_arsip')->count(); print_r($data_arsip); ?>
                </div>
              </div>
            </div>
          </div>

          {{-- Admin --}}
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="fas fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Admin</h4>
                </div>
                <div class="card-body">
                    <?php $operator = DB::table('operator')->count(); print_r($operator); ?>
                </div>
              </div>
            </div>
          </div>

          {{-- Stock Opname Berkas --}}
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Opname Berkas</h4>
                </div>
                <div class="card-body">
                  <?php $opname_berkas = DB::table('opname_berkas')->count(); print_r($opname_berkas); ?>
                </div>
              </div>
            </div>
          </div>

          {{-- Stock Opname Buku --}}
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Opname Buku</h4>
                </div>
                <div class="card-body">
                  <?php $opname_buku = DB::table('opname_buku')->count(); print_r($opname_buku); ?>
                </div>
              </div>
            </div>
          </div>
          
        </div>
    </div> 

    <div class="row">
      {{-- Peminjaman Berkas --}}
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-file-upload"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Peminjaman Berkas</h4>
            </div>
            <div class="card-body">
                <?php $peminjaman_berkas = DB::table('peminjaman_berkas')->count(); print_r($peminjaman_berkas); ?>
            </div>
          </div>
        </div>
      </div>

      {{-- Peminjaman Buku --}}
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-file-upload"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Peminjaman Buku</h4>
            </div>
            <div class="card-body">
                <?php $peminjaman_buku = DB::table('peminjaman_buku')->count(); print_r($peminjaman_buku); ?>
            </div>
          </div>
        </div>
      </div>

      {{-- Pengembalian Berkas --}}
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-file-download"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 style="font-size: 12px">Pengembalian Berkas </h4>
            </div>
            <div class="card-body">
              <?php $pengembalian_berkas = DB::table('pengembalian_berkas')->count(); print_r($pengembalian_berkas); ?>
            </div>
          </div>
        </div>
      </div>

      {{-- Pengembalian Buku --}}
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-file-download"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 style="font-size: 12px">Pengembalian Buku</h4>
            </div>
            <div class="card-body">
              <?php $pengembalian_buku = DB::table('pengembalian_buku')->count(); print_r($pengembalian_buku); ?>
            </div>
          </div>
        </div>
      </div>
      
    </div>
</div>
</div>
@endsection

@push('page-scripts')
    
@endpush