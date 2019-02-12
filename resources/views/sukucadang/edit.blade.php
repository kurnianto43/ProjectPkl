@extends('layouts.master')


@section('title')
Ubah Data
@endsection

@section('link')
   <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Suku Cadang
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-cogs"></i> Suku Cadang</a></li>
        <li class="active">Ubah Data</li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('sukucadang.update', $sukucadang) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">

                    <div class="form-group {{ $errors->has('nomor_sukucadang') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nomor_sukucadang') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Suku Cadang</label>
                        <input type="text" name="nomor_sukucadang" value="{{ $sukucadang->nomor_sukucadang }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nomor_sukucadang'))      
                                    <span class="help-block">{{ $errors->first('nomor_sukucadang') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('nama_sukucadang') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nama_sukucadang') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Suku Cadang</label>
                        <input type="text" name="nama_sukucadang" value="{{ $sukucadang->nama_sukucadang }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nama_sukucadang'))      
                                    <span class="help-block">{{ $errors->first('nama_sukucadang') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('id_kategori_sukucadang') ? ' has-error' : '' }}">
                        <label><i class="{{ $errors->has('id_kategori_sukucadang') ? ' fa fa-exclamation-circle' : '' }}"></i> Kategori</label>
                        <select name="id_kategori_sukucadang" class="form-control select2" style="width: 100%;">
                            <option disabled="disabled" selected="selected">--Pilih--</option>
                                @foreach($kategorisukucadangs as $kategorisukucadang)
                            <option 
                                value="{{ $kategorisukucadang -> id_kategori_sukucadang }}"
                                @if  ( $kategorisukucadang->id_kategori_sukucadang === $sukucadang->id_kategori_sukucadang )
                                    selected
                                @endif
                            >
                                {{ $kategorisukucadang -> nama_kategori }}
                            </option>
                                @endforeach
                        </select>
                            @if ($errors->has('id_kategori_sukucadang'))      
                                    <span class="help-block">{{ $errors->first('id_kategori_sukucadang') }}</span>
                            @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('stok_minimal') ? ' has-error' : '' }}">
                                <label for="exampleInputPassword1"><i class="{{ $errors->has('stok_minimal') ? ' fa fa-exclamation-circle' : '' }}"></i> Stok Minimal</label>
                                <input type="number" name="stok_minimal" value="{{$sukucadang->stok_minimal}}" class="form-control" id="exampleInputPassword1" placeholder="">
                                @if ($errors->has('stok_minimal'))      
                                            <span class="help-block">{{ $errors->first('stok_minimal') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('stok_tersedia') ? ' has-error' : '' }}">
                                <label for="exampleInputPassword1"><i class="{{ $errors->has('stok_tersedia') ? ' fa fa-exclamation-circle' : '' }}"></i> Stok Tersedia</label>
                                <input type="number" name="stok_tersedia" value="{{$sukucadang->stok_tersedia}}" class="form-control" id="exampleInputPassword1" placeholder="">
                                @if ($errors->has('stok_tersedia'))      
                                            <span class="help-block">{{ $errors->first('stok_tersedia') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('sukucadang.index') }}" class="btn btn-default pull-right">Kembali</a>
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