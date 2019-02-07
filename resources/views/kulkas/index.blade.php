@extends('layouts.master')


@section('title')
Data Kulkas
@endsection

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Kulkas
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-plug"></i> Data Instore Kulkas</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kulkas</h3>
              <a href="{{ route('kulkas.laporan') }}" class="btn btn-default pull-right" style="margin-left: 5px;">Cetak</a>
              <a href="{{ route('kulkas.create') }}" class="btn btn-primary pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="25%">Nomor Asset</th>
                    <th>Nomor Seri</th>
                    <th>Tanggal Masuk</th>
                    <th>Tipe</th>
                    <th>Kondisi</th>
                    <th width="10%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                @foreach($kulkas as $kulkas)
                    <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $kulkas -> nomor_asset }}</td>
                    <td>{{ $kulkas -> nomor_seri }}</td>
                    <td>{{ $kulkas -> tanggal_masuk }}</td>
                    <td>{{ $kulkas -> tipe -> nama_tipe }}</td>
                    <td>{{ $kulkas -> kondisi -> nama_kondisi }}</td>
                    <td>
                      <a href="{{ route('kulkas.edit', $kulkas) }}" class="btn btn-warning btn-xs">Ubah</a>
                      <form action="{{ route('kulkas.destroy', $kulkas) }}" method="POST" class="pull-right">
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