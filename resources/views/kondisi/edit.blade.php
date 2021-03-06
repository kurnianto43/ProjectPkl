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
        <li><a href="#"> Kondisi</a></li>
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
            <form role="form" action="{{ route('kondisi.update', $kondisi) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">

                    <div class="form-group {{ $errors->has('nama_kondisi') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nama_kondisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Kondisi</label>
                        <input type="text" name="nama_kondisi" value="{{ $kondisi->nama_kondisi }}" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama kondisi">
                            @if ($errors->has('nama_kondisi'))      
                                    <span class="help-block">{{ $errors->first('nama_kondisi') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('keterangan_kondisi') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1"><i class="{{ $errors->has('keterangan_kondisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Keterangan</label>
                        <input type="text" name="keterangan_kondisi" value="{{ $kondisi->keterangan_kondisi }}" class="form-control">
                            @if ($errors->has('keterangan_kondisi'))      
                                    <span class="help-block">{{ $errors->first('keterangan_kondisi') }}</span>
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