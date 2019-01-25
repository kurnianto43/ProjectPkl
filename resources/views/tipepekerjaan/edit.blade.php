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
        <li><a href="#"> Tipe</a></li>
        <li ><a href="#"> Tambah Data</a></li>
      </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Dataa</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" action="{{ route('tipepekerjaan.update', $tipepekerjaan) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">

                    <div class="form-group {{ $errors->has('kode_tipe_pekerjaan') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('kode_tipe_pekerjaan') ? ' fa fa-exclamation-circle' : '' }}"></i> Kode Tipe Pekerjaan</label>
                        <input type="text" name="kode_tipe_pekerjaan" value="{{ $tipepekerjaan->kode_tipe_pekerjaan }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('kode_tipe_pekerjaan'))      
                                    <span class="help-block">{{ $errors->first('kode_tipe_pekerjaan') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('keterangan_tipe_pekerjaan') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1"><i class="{{ $errors->has('keterangan_tipe_pekerjaan') ? ' fa fa-exclamation-circle' : '' }}"></i> Keterangan Tipe Pekerjaan</label>
                        <textarea name="keterangan_tipe_pekerjaan" id="" cols="30" rows="2" class="form-control">{{ $tipepekerjaan->keterangan_tipe_pekerjaan }}</textarea>
                            @if ($errors->has('keterangan_tipe_pekerjaan'))      
                                    <span class="help-block">{{ $errors->first('keterangan_tipe_pekerjaan') }}</span>
                            @endif
                    </div>

                    <div class="form-group {{ $errors->has('tarif') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1"><i class="{{ $errors->has('tarif') ? ' fa fa-exclamation-circle' : '' }}"></i> Tarif</label>
                        <input type="number" name="tarif" value="{{ $tipepekerjaan->tarif }}" class="form-control" id="exampleInputPassword1" placeholder="">
                            @if ($errors->has('tarif'))      
                                    <span class="help-block">{{ $errors->first('tarif') }}</span>
                            @endif
                    </div>

                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('tipepekerjaan.index') }}" class="btn btn-default pull-right">Kembali</a>
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