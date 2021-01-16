@extends('layouts.master')

@section('title', 'Pengembalian Buku')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laporan Pengembalian Buku</h4>
                </div>
                <div class="card-body">
                    {{-- <div class="float-left">
                        <a href="{{ route('op-berkas.t')}}" class="btn btn-icon icon-left btn-primary">
                            <i class="far fa-edit">Tambah Data</i>
                        </a>
                    </div>
                    <div class="float-right">
                        <form action="{{ route('op-berkas.c')}}" class="form-inline" method="GET">
                          <div class="input-group">
                            <input type="text" class="form-control" name="cari" placeholder="Search " value="{{ old('cari') }}" aria-label="Search">
                            <div class="input-group-append">
                              <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </form>
                    </div> --}}

                    
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>×</span>
                          </button>
                          {{ session('message')}}
                        </div>
                      </div>
                    @endif

                    <div class="float-right">
                      <a href="{{ route('pengembalian-buku.p')}}" target="_blank" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-print"> Cetak Data</i>
                        </a>
                    </div>
                    <br> <br> 

                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                          <th>No</th>
                          <th>Buku</th>
                          <th>No Register</th>
                          <th>Tgl Kembali</th>
                          <th>Jenis Arsip</th>
                          <th>Tahun</th>
                          <th>Jumlah Berkas</th>
                          <th>Nama Peminjam</th>
                          <th>Unit Pengolah</th>
                          <th>Nama Petugas</th>
                          <th>Kategori Petugas</th>
                          <th>Status</th>
                            
                        </tr>
                            @foreach ($pengembalian_buku as $no => $data)
                            <tr>
                                <td>{{ $pengembalian_buku->firstItem()+$no}}</td>
                                <td>{{ $data->no_buku}}</td>
                                <td>{{ $data->no_register}}</td>
                                <td>{{ $data->tgl_kembali}}</td>
                                <td>{{ $data->jenis_arsip}}</td>
                                <td>{{ $data->tahun}}</td>
                                <td>{{ $data->jml_berkas}}</td>
                                <td>{{ $data->nama_peminjam}}</td>
                                <td>{{ $data->unit_pengolah}}</td>
                                <td>{{ $data->nama_petugas}}</td>
                                <td>{{ $data->kategori_petugas}}</td>
                                <td>{{ $data->status}}</td>
                                
                            </tr>
                            @endforeach
                    </table>
                    {{$pengembalian_buku->links()}}
                    <div> Jumlah Data 
                        <?php $pengembalian_buku = DB::table('pengembalian_buku')->count(); print_r($pengembalian_buku); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('assets/modules/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>

@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
        title: 'Yakin hapus data?',
        text: 'Data yang sudah dihapus tidak bisa dikembalikan',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
        //     swal('Data berhasil dihapus', {
        //     icon: 'success',
        // });
        $(`#delete${id}`).submit();
        } else {
            // swal('Your imaginary file is safe!');
        }
      });
  });
</script>
@endpush