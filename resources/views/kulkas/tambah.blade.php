@extends('layouts.master')


@section('title')
Tambah Data
@endsection

@section('link')
   <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content_header')
        <h1>
            Kulkas
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-plug"></i> Kulkas</a></li>
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
            <form role="form" action="{{ route('kulkas.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group {{ $errors->has('nomor_asset') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nomor_asset') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Asset</label>
                        <input type="text" name="nomor_asset" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nomor_asset'))      
                                    <span class="help-block">{{ $errors->first('nomor_asset') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('nomor_seri') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nomor_seri') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Seri</label>
                        <input type="text" name="nomor_seri" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nomor_seri'))      
                                    <span class="help-block">{{ $errors->first('nomor_seri') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('tanggal_masuk') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('tanggal_masuk') ? ' fa fa-exclamation-circle' : '' }}"></i> Tanggal masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('tanggal_masuk'))      
                                    <span class="help-block">{{ $errors->first('tanggal_masuk') }}</span>
                            @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('id_tipe') ? ' has-error' : '' }}">
                                <label><i class="{{ $errors->has('id_tipe') ? ' fa fa-exclamation-circle' : '' }}"></i> Tipe</label>
                                <select name="id_tipe" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($tipes as $tipe)
                                   <option value="{{ $tipe -> id_tipe }}">{{ $tipe -> nama_tipe }}</option>
                                       @endforeach
                                </select>
                                    @if ($errors->has('id_tipe'))      
                                            <span class="help-block">{{ $errors->first('id_tipe') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('id_kondisi') ? ' has-error' : '' }}">
                                <label><i class="{{ $errors->has('id_kondisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Kondisi</label>
                                <select name="id_kondisi" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($kondisis as $kondisi)
                                   <option value="{{ $kondisi -> id_kondisi }}">{{ $kondisi -> nama_kondisi }}</option>
                                       @endforeach
                                </select>
                                    @if ($errors->has('id_kondisi'))      
                                            <span class="help-block">{{ $errors->first('id_kondisi') }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>

                    

                    
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('kulkas.index') }}" class="btn btn-default pull-right">Kembali</a>
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