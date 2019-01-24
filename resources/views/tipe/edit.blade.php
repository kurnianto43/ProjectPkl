@extends('layouts.master')


@section('title')
Ubah Data
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
        <li><a href="#"> Tipe</a></li>
        <li ><a href="#"> Ubah Data</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
        <div class="col-md-6 col-md-offset-3">
           <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tipe.update', $tipe) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
              <div class="box-body">

                <div class="form-group {{ $errors->has('nama_tipe') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1"><i class="{{ $errors->has('nama_tipe') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Tipe</label>
                  <input type="text" name="nama_tipe" value="{{ $tipe->nama_tipe }}" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama tipe">
                         @if ($errors->has('nama_tipe'))      
                                    <span class="help-block">{{ $errors->first('nama_tipe') }}</span>
                          @endif
                </div>

                <div class="form-group {{ $errors->has('keterangan_tipe') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1"><i class="{{ $errors->has('keterangan_tipe') ? ' fa fa-exclamation-circle' : '' }}"></i> Keterangan</label>
                  <textarea name="keterangan_tipe" id="" cols="30" rows="3" class="form-control">{{ $tipe->keterangan_tipe }}</textarea>
                            @if ($errors->has('keterangan_tipe'))      
                                    <span class="help-block">{{ $errors->first('keterangan_tipe') }}</span>
                            @endif
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('tipe.index') }}" class="btn btn-default pull-right">Kembali</a>
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