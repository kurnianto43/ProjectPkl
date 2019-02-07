@extends('layouts.master')


@section('title')
Ubah Foto Profil
@endsection

@section('link')

@endsection

@section('content_header')
        <h1>
            User
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> User</a></li>
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
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group {{ $errors->has('avatar') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1"><i class="{{ $errors->has('avatar') ? ' fa fa-exclamation-circle' : '' }}"></i> Nama Tipe</label>
                  <input type="file" name="avatar" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama tipe">
                         @if ($errors->has('avatar'))      
                                    <span class="help-block">{{ $errors->first('avatar') }}</span>
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