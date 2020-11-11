@extends('layouts.master')

@section('title', 'Surat Masuk')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h4>Laporan Surat Masuk</h4>
                </div>
                
                <div class="card-body">
                    {{-- <div class="row">
                        <div class="input-group col-md-12">
                            <label for="label">Tanggal Awal</label>
                            <input type="date" name="tgl_awal" id="tgl_awal" class="form-control"/>
                        </div>
                        <br><br><br>
                        <div class="input-group col-md-12">
                            <label for="label">Tanggal Akhir</label>
                            <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control"/>
                        </div>
                        <br><br><br>
                        <div class="input-group mb-2">
                            <a href="#" target="_blank" class="btn btn-primary col-md-12">Cetak Laporan Pertanggal</a>  
                        </div>
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
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <tr>
                            <th>No</th>
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Tanggal Terima</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Keterangan</th>
                        </tr>
                            @foreach ($surat_masuk as $no => $data)
                            <tr>
                                <td>{{ $surat_masuk->firstItem()+$no}}</td>
                                <td>{{ $data->no_agenda}}</td>
                                <td>{{ $data->no_surat}}</td>
                                <td>{{ $data->tgl_surat}}</td>
                                <td>{{ $data->tgl_terima}}</td>
                                <td>{{ $data->sumber_surat}}</td>
                                <td>{{ $data->perihal}}</td>
                                <td>{{ $data->keterangan}}</td>
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