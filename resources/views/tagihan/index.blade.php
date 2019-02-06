@extends('layouts.master')


@section('title')
Data Tagihan
@endsection

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Tagihan
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-plug"></i> Data Tagihan</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tagihan</h3>
              <a href="{{ route('tagihan.create') }}" class="btn btn-primary pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="35%">Nomor Dokumen</th>
                    <th>Periode Tagihan</th>
                    <th width="12%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
              @foreach($tagihans as $tagihan)
                    <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $tagihan -> nomor_dokumen }}</td>
                    <td>{{ $tagihan -> periode_tagihan }}</td>
                    <td>
                      <a href="{{ route('tagihan.laporan', $tagihan) }}" class="btn btn-default btn-xs">Cetak</a>
                      <form action="{{ route('tagihan.destroy', $tagihan) }}" method="POST" class="pull-right">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                          <input class="btn btn-danger btn-xs" type="submit" value="Hapus">
                      </form>
                    </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

@endsection

@section('script')
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection