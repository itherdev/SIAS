@extends('layouts.master')

@section('title', 'Surat Masuk')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h4>Print Laporan Surat Masuk</h4>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="input-group col-md-6">
                            <label for="label">Tanggal Awal</label>
                            <input type="date" name="tgl_awal" id="tgl_awal" class="form-control"/>
                        </div>

                        <div class="input-group col-md-6">
                            <label for="label">Tanggal Akhir</label>
                            <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control"/>
                        </div>

                        <div class="input-group mb-2">
                            <button type="submit">Cetak</button>
                        </div>
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