@extends('layouts.master')


@section('title')
Tambah Data
@endsection

@section('link')
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
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
    <div class="col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('perbaikan.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Dokumen</label>
                        <input type="text" name="nomor_dokumen" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Teknisi</label>
                                <select name="id_teknisi" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($teknisis as $teknisi)
                                   <option value="{{ $teknisi -> id_teknisi }}">{{ $teknisi -> kode_teknisi }}</option>
                                       @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <label>Kulkas</label>
                                <select name="id_kulkas" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($kulkas as $kulkas)
                                   <option value="{{ $kulkas -> id_kulkas }}">{{ $kulkas -> nomor_asset }}</option>
                                       @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Perbaikan</label>
                                <input type="date" name="tanggal_perbaikan" class="form-control" id="exampleInputEmail1" placeholder=""> 
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <label>Tipe Pekerjaan</label>
                                <select name="id_tipe_pekerjaan" class="form-control select2" style="width: 100%;">
                                   <option disabled="disabled" selected="selected"></option>
                                       @foreach($tipepekerjaans as $tipepekerjaan)
                                   <option value="{{ $tipepekerjaan -> id_tipe_pekerjaan }}">{{ $tipepekerjaan -> kode_tipe_pekerjaan }}</option>
                                       @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="temuan-masalah" class="col-md-6">
                            <div class="form-group">
                                <label>Temuan Masalah</label>
                                <div class="row">
                                <div class="col-md-10">
                                  <input type="text" name="temuan_masalah[]" class="form-control">
                                </div>
                                <div class="col-md-2">
                                  <a href="#" id="tambah-masalah" class="btn btn-primary form-control"><i class="fa fa-plus"></i></a>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="suku-cadang" class="col-md-6" >
                            <div class="form-group">
                                <label>Suku Cadang</label>
                                <div class="row">
                                <div class="col-md-7">
                                    <select name="id_sukucadang" class="form-control select2" style="width: 100%;">
                                           <option disabled="disabled" selected="selected"></option>
                                               @foreach($sukucadangs as $sukucadang)
                                           <option value="{{ $sukucadang->id_sukucadang }}">{{ $sukucadang->nomor_sukucadang }}</option>
                                               @endforeach
                                        </select>
                                </div>
                                <div class="col-md-3">
                                 <input type="number" name="jumlah_sukucadang" placeholder="Qty" class="form-control">
                                </div>
                                <div class="col-md-2">
                                  <a href="#" id="tambah-suku-cadang" class="btn btn-primary form-control"><i class="fa fa-plus"></i></a>
                                </div>
                                </div>
                                
                            </div>
                           
                        </div>
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
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
        maximumSelectionLength: 2
    })    
  })
</script>
<script>
  
 $(document).ready(function(){
    var i = 1;
    $('#tambah-masalah').click(function(){
      i++;
      $('#temuan-masalah').append('<div class="row" id="row'+i+'" style="margin-bottom:15px"><div class="col-md-10"><input type="text" name="temuan_masalah[]" class="form-control"></div><div class="col-md-2"><a href="#" id="'+i+'" class="btn btn-danger form-control hapus"><i class="fa fa-minus"></i></a></div></div>')
    });
    $(document).on('click', '.hapus', function(){
      var button_id = $(this).attr("id");
      $("#row"+button_id+"").remove();
    });
 });


 $(document).ready(function(){
    var i = 1;
    $('#tambah-suku-cadang').click(function(){
      i++;
      $('#suku-cadang').append(' <div class="row" id="row'+i+'" style="margin-bottom:15px"><div class="col-md-7"><select name="id_sukucadang" class="form-control select2" style="width: 100%;"><option disabled="disabled" selected="selected"></option>@foreach($sukucadangs as $sukucadang)<option value="{{ $sukucadang->id_sukucadang }}">{{ $sukucadang->nomor_sukucadang }}</option>@endforeach</select></div><div class="col-md-3"><input type="number" placeholder="Qty" class="form-control"></div><div class="col-md-2"><a href="#" id="'+i+'" class="btn btn-danger form-control hapus-sk"><i class="fa fa-minus"></i></a></div></div>')
    });
    $(document).on('click', '.hapus-sk', function(){
      var button_id = $(this).attr("id");
      $("#row"+button_id+"").remove();
    });
 });
</script>

@endsection

