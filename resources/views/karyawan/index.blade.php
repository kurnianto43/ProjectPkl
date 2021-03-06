@extends('layouts.master')


@section('title')
Karyawan
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
        <li class="active"><a href="#"><i class="fa fa-users"></i> Data Karyawan</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Karyawan</h3>
              <a href="{{ route('karyawan.create') }}" class="btn btn-primary pull-right">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Jabatan</th>
                    <th width="30%">Alamat</th>
                    <th>Nomor Hp/Telp</th>
                    <th>Foto</th>
                    <th width="10%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                @foreach($karyawans as $karyawan)
                    <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $karyawan->nik_karyawan }}</td>
                    <td>{{ $karyawan->nama_karyawan }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>{{ $karyawan->no_hp }}</td>
                    <td>
                      <img style="height: 50px" class="user-avatar rounded-circle" src="{{ asset( 'storage/' . $karyawan->foto_karyawan) }}" alt="User Avatar">
                    </td>
                    <td>
                      <a href="{{ route('karyawan.edit', $karyawan) }}" class="btn btn-warning btn-xs">Ubah</a>
                      <form action="{{ route('karyawan.destroy', $karyawan) }}" method="POST" class="pull-right">
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