@extends('layouts.master')

@section('title', 'Surat Masuk')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Surat Masuk</h4>
                  </div>
                <div class="card-body">
                    <div class="float-left">
                        <a href="{{ route('surat-masuk.t')}}" class="btn btn-icon icon-left btn-primary">
                            <i class="far fa-edit">Tambah Data</i>
                        </a>
                    </div>
                    <div class="float-right">
                        <form action="{{ route('surat-masuk.c')}}" class="form-inline" method="GET">
                          <div class="input-group">
                            <input type="text" class="form-control" name="cari" placeholder="Search " value="{{ old('cari') }}" aria-label="Search">
                            <div class="input-group-append">
                              <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </form>
                      </div>

                      <br><br><br>
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
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Tanggal Terima</th>
                            <th>Action</th>
                        </tr>
                            @foreach ($surat_masuk as $no => $data)
                            <tr>
                                <td>{{ $surat_masuk->firstItem()+$no}}</td>
                                <td>{{ $data->no_agenda}}</td>
                                <td>{{ $data->no_surat}}</td>
                                <td>{{ $data->sumber_surat}}</td>
                                <td>{{ $data->perihal}}</td>
                                <td>{{ $data->tgl_terima}}</td>
                                <td>
                                    <a href="{{ route('surat-masuk.e',$data->id)}}" class="badge badge-primary">Edit</a>
                                    <a href="#"data-id="{{ $data->id}}" class="badge badge-danger swal-confirm">
                                    <form action="{{ route('surat-masuk.d',$data->id)}}" id="delete{{ $data->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                        Delete</a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    {{$surat_masuk->links()}}
                    <div> Jumlah Data 
                        <?php $surat_masuk = DB::table('surat_masuk')->count(); print_r($surat_masuk); ?>
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