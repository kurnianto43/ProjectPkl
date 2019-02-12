@extends('layouts.master')


@section('title')
Data Perbaikan
@endsection

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Perbaikan
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-plug"></i> Perbaikan</a></li>
        <li class="active">Data Perbaikan</li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Perbaikan</h3>
              <a href="{{ route('kulkas.create') }}" class="btn btn-default pull-right" style="margin-left: 5px;">Cetak</a>
              <a href="{{ route('perbaikan.create') }}" class="btn btn-primary pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="20%">Nomor Dokumen</th>
                    <th width="20%">Nama Teknisi</th>
                    <th>Nomor Asset</th>
                    <th>Tipe Pekerjaan</th>
                    <th>Tanggal Perbaikan</th>
                    <th width="11%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                @foreach($perbaikans as $perbaikan)
                    <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $perbaikan -> nomor_dokumen_perbaikan }}</td>
                    <td>{{ $perbaikan -> teknisi -> nama_teknisi }}</td>
                    <td>{{ $perbaikan -> kulkas -> nomor_asset }}</td>
                    <td>{{ $perbaikan -> tipepekerjaan -> kode_tipe_pekerjaan }}</td>
                    <td>{{ \Carbon\Carbon::parse($perbaikan -> tanggal_perbaikan)->format('d/m/Y')}}</td>
                    <td>
                      <a href="{{ route('perbaikan.details', $perbaikan) }}" class="btn btn-info btn-xs">Rincian</a>
                      <form action="{{ route('perbaikan.destroy', $perbaikan) }}" method="POST" class="pull-right">
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