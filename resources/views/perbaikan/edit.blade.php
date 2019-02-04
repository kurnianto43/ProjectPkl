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
            <form role="form" action="{{ route('perbaikan.update', $perbaikan) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">
                    <div class="form-group {{ $errors->has('nomor_dokumen_perbaikan') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1"><i class="{{ $errors->has('nomor_dokumen_perbaikan') ? ' fa fa-exclamation-circle' : '' }}"></i> Nomor Dokumen</label>
                        <input type="text" name="nomor_dokumen_perbaikan" value="{{ $perbaikan -> nomor_dokumen_perbaikan }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if ($errors->has('nomor_dokumen_perbaikan'))      
                                    <span class="help-block">{{ $errors->first('nomor_dokumen_perbaikan') }}</span>
                            @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('id_teknisi') ? ' has-error' : '' }}">
                                <label><i class="{{ $errors->has('id_teknisi') ? ' fa fa-exclamation-circle' : '' }}"></i> Teknisi</label>
                                <select name="id_teknisi" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($teknisis as $teknisi)
                                           <option 
                                              value="{{ $teknisi -> id_teknisi }}"
                                                  @if  ( $teknisi->id_teknisi === $perbaikan->id_teknisi )
                                                      selected
                                                  @endif
                                          >
                                          {{ $teknisi -> kode_teknisi }}
                                          </option>
                                       @endforeach
                                </select>
                                    @if ($errors->has('id_teknisi'))      
                                            <span class="help-block">{{ $errors->first('id_teknisi') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('id_kulkas') ? ' has-error' : '' }}">
                                <label><i class="{{ $errors->has('id_kulkas') ? ' fa fa-exclamation-circle' : '' }}"></i> Kulkas</label>
                                <select name="id_kulkas" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($kulkas as $kulkas)
                                            <option 
                                                  value="{{ $kulkas -> id_kulkas }}"
                                                      @if  ( $kulkas->id_kulkas === $perbaikan->id_kulkas )
                                                          selected
                                                      @endif
                                              >
                                              {{ $kulkas -> nomor_asset }}
                                            </option>
                                       @endforeach
                                </select>
                                    @if ($errors->has('id_kulkas'))      
                                            <span class="help-block">{{ $errors->first('id_kulkas') }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('tanggal_perbaikan') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1"><i class="{{ $errors->has('tanggal_perbaikan') ? ' fa fa-exclamation-circle' : '' }}"></i> Tanggal Perbaikan</label>
                                <input type="date" name="tanggal_perbaikan" value="{{ $perbaikan -> tanggal_perbaikan }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                    @if ($errors->has('tanggal_perbaikan'))      
                                            <span class="help-block">{{ $errors->first('tanggal_perbaikan') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('id_tipe_pekerjaan') ? ' has-error' : '' }}">
                                <label><i class="{{ $errors->has('id_tipe_pekerjaan') ? ' fa fa-exclamation-circle' : '' }}"></i> Tipe Pekerjaan</label>
                                <select name="id_tipe_pekerjaan" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($tipepekerjaans as $tipepekerjaan)
                                            <option 
                                                  value="{{ $tipepekerjaan -> id_tipe_pekerjaan }}"
                                                      @if  ( $tipepekerjaan->id_tipe_pekerjaan === $perbaikan->id_tipe_pekerjaan )
                                                          selected
                                                      @endif
                                              >
                                              {{ $tipepekerjaan -> kode_tipe_pekerjaan }}
                                            </option>
                                       @endforeach
                                </select>
                                    @if ($errors->has('id_tipe_pekerjaan'))      
                                            <span class="help-block">{{ $errors->first('id_tipe_pekerjaan') }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Temuan masalah</label>
                                <select name="id_jenis_masalah" class="form-control select2" style="width: 100%;">
                                  <option value="" disabled="disabled" selected="selected"></option>
                                       @foreach($jenis_masalahs as $jenis_masalah)
                                            <option 
                                                  value="{{ $jenis_masalah -> id_jenis_masalah }}"
                                                      @if  ( $jenis_masalah->id_jenis_masalah === $perbaikan->id_jenis_masalah )
                                                          selected
                                                      @endif
                                              >
                                              {{ $jenis_masalah -> kode_masalah }}
                                            </option>
                                       @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Suku Cadang</label>
                                <select name="id_sukucadang" class="form-control select2" style="width: 100%;">
                                       @foreach($sukucadangs as $sukucadang)
                                            <option 
                                              value="{{ $sukucadang -> id_sukucadang }}"
                                                  @if  ( $sukucadang->id_sukucadang === $perbaikan->id_sukucadang )
                                                      selected
                                                  @endif
                                          >
                                          {{ $sukucadang -> nomor_sukucadang }} - {{ $sukucadang -> nama_sukucadang }}
                                          </option>
                                       @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                          <label for="">Qty</label>
                          <input name="jumlah_sukucadang" value="{{ $perbaikan -> jumlah_sukucadang }}" type="number" class="form-control">
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
    $('.select2').select2({
        maximumSelectionLength: 2
    })    
  })
</script>
@endsection