@extends('layouts.master')

@section('title', 'Stock Opname Berkas')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('op-berkas.t')}}" class="btn btn-icon icon-left btn-primary">
                        <i class="far fa-edit">Tambah Data</i>
                    </a>
                    <hr>
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
                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <th>No</th>
                            <th>Kode Klarifikasi</th>
                            <th>No Berkas</th>
                            <th>Tahun</th>
                            <th>Kategori Berkas</th>
                            <th>Uraian Berkas</th>
                            <th>Action</th>
                        </tr>
                            @foreach ($opname_berkas as $no => $data)
                            <tr>
                                <td>{{ $opname_berkas->firstItem()+$no}}</td>
                                <td>{{ $data->kode_klarifikasi}}</td>
                                <td>{{ $data->no_berkas}}</td>
                                <td>{{ $data->tahun}}</td>
                                <td>{{ $data->kategori_berkas}}</td>
                                <td>{{ $data->uraian_berkas}}</td>
                                <td>
                                    <a href="{{ route('op-berkas.e',$data->id)}}" class="badge badge-primary">Edit</a>
                                    <a href="#"data-id="{{ $data->id}}" class="badge badge-danger swal-confirm">
                                    <form action="{{ route('op-berkas.d',$data->id)}}" id="delete{{ $data->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                        Delete</a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    {{$opname_berkas->links()}}
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