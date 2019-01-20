@extends('layouts.master')


@section('title')
Tambah Data
@endsection

@section('link')
   <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Master Data
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li><a href="#"> sukucadang</a></li>
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
            <form role="form" action="{{ route('sukucadang.store') }}" method="POST">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Suku Cadang</label>
                  <input type="text" name="nomor_sukucadang" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama sukucadang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Suku Cadang</label>
                  <input type="text" name="nama_sukucadang" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama sukucadang">
                </div>
                <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori_sukucadang" class="form-control select2" style="width: 100%;">
                  <option disabled="disabled" selected="selected">--Pilih--</option>
                  @foreach($kategorisukucadangs as $kategorisukucadang)
                  <option value="{{ $kategorisukucadang -> id_kategori_sukucadang }}">{{ $kategorisukucadang -> nama_kategori }}</option>
                  @endforeach
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Stok</label>
                  <input type="number" name="stok" class="form-control" id="exampleInputPassword1" placeholder="Masukan keterangan">
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
<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()    
  })
</script>
@endsection