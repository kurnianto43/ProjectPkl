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
        <li><a href="#"> Karyawan</a></li>
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
            <div class="box-body">
            <!-- form start -->
            <form role="form" action="{{ route('karyawan.store') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group {{ $errors->has('nik_karyawan') ? ' has-error' : '' }}">
                      <label for="exampleInputEmail1"><i class="{{ $errors->has('nik_karyawan') ? ' fa fa-exclamation-circle' : '' }}"></i> NIK Karyawan</label>
                      <input type="text" name="nik_karyawan" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nik_karyawan'))      
                                    <span class="help-block">{{ $errors->first('nik_karyawan') }}</span>
                            @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group {{ $errors->has('nama_karyawan') ? ' has-error' : '' }}">
                      <label for="exampleInputEmail1"><i class="{{ $errors->has('nama_karyawan') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Karyawan</label>
                      <input type="text" name="nama_karyawan" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nama_karyawan'))      
                                    <span class="help-block">{{ $errors->first('nama_karyawan') }}</span>
                            @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
                      <label for="exampleInputPassword1"><i class="{{ $errors->has('jabatan') ? ' fa fa-exclamation-circle' : '' }}"></i> Jabatan</label>
                      <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="">
                            @if ($errors->has('jabatan'))      
                                    <span class="help-block">{{ $errors->first('jabatan') }}</span>
                            @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                      <label for="exampleInputPassword1"><i class="{{ $errors->has('no_hp') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Hp/Telp</label>
                      <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="">
                            @if ($errors->has('no_hp'))      
                                    <span class="help-block">{{ $errors->first('no_hp') }}</span>
                            @endif
                    </div>
                  </div>
                </div>
                
                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1"><i class="{{ $errors->has('alamat') ? ' fa fa-exclamation-circle' : '' }}"></i> Alamat</label>
                  <textarea id="" cols="20" rows="3" name="alamat" class="form-control"></textarea>
                            @if ($errors->has('alamat'))      
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                            @endif
                </div>
                
                <div class="form-group {{ $errors->has('foto_karyawan') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1"><i class="{{ $errors->has('foto_karyawan') ? ' fa fa-exclamation-circle' : '' }}"></i> Foto</label>
                  <input type="file" name="foto_karyawan" class="form-control" id="exampleInputPassword1" placeholder="">
                            @if ($errors->has('foto_karyawan'))      
                                    <span class="help-block">{{ $errors->first('foto_karyawan') }}</span>
                            @endif
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('karyawan.index') }}" class="btn btn-default pull-right">Kembali</a>
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