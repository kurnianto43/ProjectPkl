@extends('layouts.master')


@section('title')
Ubah Data
@endsection

@section('link')
   <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content_header')
        <h1>
           Teknisi
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Teknisi</a></li>
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
            <form role="form" action="{{ route('teknisi.update', $teknisi) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group {{ $errors->has('kode_teknisi') ? ' has-error' : '' }}">
                          <label for="exampleInputEmail1"><i class="{{ $errors->has('kode_teknisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Kode Teknisi</label>
                          <input type="text" name="kode_teknisi" value="{{ $teknisi -> kode_teknisi }}" class="form-control" id="exampleInputEmail1" placeholder="">
                              @if ($errors->has('kode_teknisi'))      
                                      <span class="help-block">{{ $errors->first('kode_teknisi') }}</span>
                              @endif
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group {{ $errors->has('nama_teknisi') ? ' has-error' : '' }}">
                          <label for="exampleInputEmail1"><i class="{{ $errors->has('nama_teknisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Teknisi</label>
                          <input type="text" name="nama_teknisi" value="{{ $teknisi -> nama_teknisi }}" class="form-control" id="exampleInputEmail1" placeholder="">
                              @if ($errors->has('nama_teknisi'))      
                                      <span class="help-block">{{ $errors->first('nama_teknisi') }}</span>
                              @endif
                      </div>
                    </div>
                  </div> 

                    <div class="form-group {{ $errors->has('alamat_teknisi') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('alamat_teknisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Alamat</label>
                          <textarea name="alamat_teknisi" class="form-control" id="" cols="30" rows="3">{{ $teknisi -> alamat_teknisi }}</textarea>
                            @if ($errors->has('alamat_teknisi'))      
                                    <span class="help-block">{{ $errors->first('alamat_teknisi') }}</span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('nomor_hp') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nomor_hp') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Hp</label>
                        <input type="text" name="nomor_hp" value="{{ $teknisi -> nomor_hp }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nomor_hp'))      
                                    <span class="help-block">{{ $errors->first('nomor_hp') }}</span>
                            @endif
                    </div>
                   

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('teknisi.index') }}" class="btn btn-default pull-right">Kembali</a>
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