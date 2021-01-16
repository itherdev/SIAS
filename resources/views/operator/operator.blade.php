@extends('layouts.master')

@section('title', 'Daftar Oprator')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Opname Berkas</h4>
                </div>
                <div class="card-body">
                    <div class="float-left">
                        <a href="{{ route('op.t')}}" class="btn btn-icon icon-left btn-primary">
                            <i class="far fa-edit">Tambah Data</i>
                        </a>
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
                <table class="table table-striped table-bordered table-sm">
                    <tr>
                        <th>No</th>
                        <th>ID Operator</th>
                        <th>Nama Operator</th>
                        <th>Lavel</th>
                        <th>Action</th>
                    </tr>
                        @foreach ($operator as $no => $data)
                        <tr>
                            <td>{{ $operator->firstItem()+$no}}</td>
                            <td>{{ $data->id_op}}</td>
                            <td>{{ $data->nm_op}}</td>
                            <td>{{ $data->level}}</td>
                            <td>
                                <a href="{{ route('op.e',$data->id)}}" class="badge badge-primary"><i class="fas fa-pen"></i></a>
                                <a href="#"data-id="{{ $data->id}}" class="badge badge-danger swal-confirm">
                                <form action="{{ route('op.d',$data->id)}}" id="delete{{ $data->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                <i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </table>
                {{$operator->links()}}
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