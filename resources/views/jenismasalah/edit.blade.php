@extends('layouts.master')


@section('title')
Tambah Data
@endsection

@section('link')

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
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('jenismasalah.update', $jenismasalah) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">
                    
                   <div class="form-group {{ $errors->has('kode_jenis_masalah') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('kode_jenis_masalah') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Kondisi</label>
                        <input type="text" name="kode_jenis_masalah" value="{{ $jenismasalah->kode_jenis_masalah }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('kode_jenis_masalah'))      
                                    <span class="help-block">{{ $errors->first('kode_jenis_masalah') }}</span>
                            @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('keterangan_jenis_masalah') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1"><i class="{{ $errors->has('keterangan_jenis_masalah') ? ' fa fa-exclamation-circle' : '' }}"></i> Keterangan</label>
                        <input type="text" name="keterangan_jenis_masalah" value="{{ $jenismasalah->keterangan_jenis_masalah }}" class="form-control" id="exampleInputPassword1" placeholder="">
                            @if ($errors->has('keterangan_jenis_masalah'))      
                                    <span class="help-block">{{ $errors->first('keterangan_jenis_masalah') }}</span>
                            @endif
                    </div>
                </div>
                    <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('kondisi.index') }}" class="btn btn-default pull-right">Kembali</a>
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