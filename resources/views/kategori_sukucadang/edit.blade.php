@extends('layouts.master')


@section('title')
Ubah Data
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
        <li ><a href="#"> Ubah Data</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-md-6 col-md-offset-3">
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('kategorisukucadang.update', $kategorisukucadang) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kategori</label>
                  <input type="text" name="nama_kategori" value="{{ $kategorisukucadang->nama_kategori }}" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama kondisi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <textarea name="keterangan" id="" cols="30" rows="3" class="form-control">{{ $kategorisukucadang->keterangan }}</textarea>
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