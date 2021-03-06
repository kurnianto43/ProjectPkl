@extends('layouts.master')


@section('title')
Teknisi
@endsection

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Teknisi
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Teknisi</a></li>
        <li class="active">Data Teknisi</li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Teknisi</h3>
              <a style="margin-left: 5px" href="{{ route('teknisi.laporan') }}" class="btn btn-default pull-right">Cetak</a>
              <a href="{{ route('teknisi.create') }}" class="btn btn-primary pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Kode Teknisi</th>
                    <th>Nama Teknisi</th>
                    <th width="35%">Alamat</th>
                    <th width="15%">Nomor Hp</th>
                    <th width="10%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                @foreach($teknisis as $teknisi)
                    <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $teknisi -> kode_teknisi }}</td>
                    <td>{{ $teknisi -> nama_teknisi }}</td>
                    <td>{{ $teknisi -> alamat_teknisi }}</td>
                    <td>{{ $teknisi -> nomor_hp }}</td>
                    <td>
                      <a href="{{ route('teknisi.edit', $teknisi) }}" class="btn btn-warning btn-xs">Ubah</a>
                      <form action="{{ route('teknisi.destroy', $teknisi) }}" method="POST" class="pull-right">
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