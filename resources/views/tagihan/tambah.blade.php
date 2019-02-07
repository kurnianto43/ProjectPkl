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
            <form role="form" action="{{ route('tagihan.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group {{ $errors->has('nomor_dokumen') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nomor_dokumen') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Dokumen</label>
                        <input type="text" name="nomor_dokumen" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nomor_dokumen'))      
                                    <span class="help-block">{{ $errors->first('nomor_dokumen') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('periode_perbaikan') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('periode_perbaikan') ? ' fa fa-exclamation-circle' : '' }}"></i> Periode</label>
                        <input type="text" name="periode_tagihan" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('periode_perbaikan'))      
                                    <span class="help-block">{{ $errors->first('periode_perbaikan') }}</span>
                            @endif
                    </div>
                    
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('tagihan.index') }}" class="btn btn-default pull-right">Kembali</a>
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