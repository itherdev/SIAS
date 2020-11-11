@extends('layouts.master')

@section('title', 'Surat Keluar')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laporan Surat Keluar</h4>
                  </div>
                <div class="card-body">
                    <div class="float-left">
                        {{-- <a href="{{ route('surat-keluar.t')}}" class="btn btn-icon icon-left btn-primary">
                            <i class="far fa-edit">Tambah Data</i>
                        </a> --}}
                    </div>
                    <div class="float-right">
                        {{-- <form action="{{ route('surat-keluar.c')}}" class="form-inline" method="GET">
                          <div class="input-group">
                            <input type="text" class="form-control" name="cari" placeholder="Search " value="{{ old('cari') }}" aria-label="Search">
                            <div class="input-group-append">
                              <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </form> --}}
                      </div>

                      
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
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Tujuan Surat</th>
                            <th>Perihal</th>
                            <th>Keterangan</th>

                        </tr>
                            @foreach ($surat_keluar as $no => $data)
                            <tr>
                                <td>{{ $surat_keluar->firstItem()+$no}}</td>
                              
                                <td>{{ $data->no_surat}}</td>
                                <td>{{ $data->tgl_surat}}</td>
                                <td>{{ $data->tujuan_surat}}</td>
                                <td>{{ $data->perihal}}</td>
                                <td>{{ $data->keterangan}}</td>
                                
                                
                            </tr>
                            @endforeach
                    </table>
                    {{$surat_keluar->links()}}
                    <div> Jumlah Data 
                        <?php $surat_keluar = DB::table('surat_keluar')->count(); print_r($surat_keluar); ?>
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