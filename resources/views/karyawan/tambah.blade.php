@extends('layouts.master')


@section('title')
Tambah Data
@endsection

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section('content_header')
        <h1>
            Master Data
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li><a href="#"> Kondisi</a></li>
        <li ><a href="#"> Tambah Data</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('karyawan.store') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIK Karyawan</label>
                  <input type="text" name="nik_karyawan" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama kondisi">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Karyawan</label>
                  <input type="text" name="nama_karyawan" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama kondisi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Masukan keterangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukan keterangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Hp/Telp</label>
                  <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukan keterangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Foto</label>
                  <input type="file" name="foto_karyawan" class="form-control" id="exampleInputPassword1" placeholder="Masukan keterangan">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

@endsection

@section('script')

@endsection