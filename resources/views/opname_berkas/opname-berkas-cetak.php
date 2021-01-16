@extends('layouts.master')

@section('title', 'Stock Opname Berkas')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laporan Opname Berkas</h4>
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
                      <a href="{{ route('op-berkas.p')}}" target="_blank" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-print"> Cetak Data</i>
                        </a>
                    </div>
                    <br> <br> 

                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <th>No</th>
                            <th>Kode Klasifikasi</th>
                            <th>No Berkas</th>
                            <th>Tahun</th>
                            <th>Kategori Berkas</th>
                            <th>Uraian Informasi</th>
                            <th>Jumlah Berkas</th>
                            <th>Jumlah Berkas Ada</th>
                            <th>Jumlah Berkas Tidak Ada</th>
                            <th>Jumlah Boks</th>
                            <th>No Boks</th>
                            <th>lokasi</th>
                            <th>Keterangan</th>
                            
                        </tr>
                            @foreach ($opname_berkas as $no => $data)
                            <tr>
                                <td>{{ $opname_berkas->firstItem()+$no}}</td>
                                <td>{{ $data->kode_klarifikasi}}</td>
                                <td>{{ $data->no_berkas}}</td>
                                <td>{{ $data->tahun}}</td>
                                <td>{{ $data->kategori_berkas}}</td>
                                <td>{{ $data->uraian_berkas}}</td>
                                <td>{{ $data->jml_berkas}}</td>
                                <td>{{ $data->jml_berkasada}}</td>
                                <td>{{ $data->jml_berkastidakada}}</td>
                                <td>{{ $data->jml_boks}}</td>
                                <td>{{ $data->no_boks}}</td>
                                <td>{{ $data->lokasi}}</td>
                                <td>{{ $data->ket}}</td>
                                
                            </tr>
                            @endforeach
                    </table>
                    {{$opname_berkas->links()}}
                    <div> Jumlah Data 
                        <?php $opname_berkas = DB::table('opname_berkas')->count(); print_r($opname_berkas); ?>
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