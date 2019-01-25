@extends('layouts.master')


@section('title')
kondisi
@endsection

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Master Data
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active"><a href="#"> Data Kondisi</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kondisi</h3>
              <a href="{{ route('jenismasalah.create') }}" class="btn btn-primary pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="25%">Kode Jenis Masalah</th>
                    <th>Keterangan</th>
                    <th width="10%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                @foreach($jenismasalahs as $jenismasalah)
                    <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $jenismasalah->kode_jenis_masalah }}</td>
                    <td>{{ $jenismasalah->keterangan_jenis_masalah }}</td>
                    <td>
                      <a href="{{ route('jenismasalah.edit', $jenismasalah) }}" class="btn btn-warning btn-xs">Ubah</a>
                      <form action="{{ route('jenismasalah.destroy', $jenismasalah) }}" method="POST" class="pull-right">
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