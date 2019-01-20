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
        <li><a href="#"> sukucadang</a></li>
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
            <form role="form" action="{{ route('kulkas.update', $kulkas) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Asset</label>
                  <input type="text" name="nomor_asset" value="{{ $kulkas->nomor_asset }}" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama sukucadang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Seri</label>
                  <input type="text" name="nomor_seri" value="{{ $kulkas->nomor_seri }}" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama sukucadang">
                </div>
                <div class="form-group">
                    <label>Tipe</label>
                    <select name="id_tipe" class="form-control select2" style="width: 100%;">
                         <option disabled="disabled" selected="selected">--Pilih--</option>
                         @foreach($tipes as $tipe)
                         <option 
                              value="{{ $tipe -> id_tipe }}"
                                  @if  ( $tipe->id_tipe === $kulkas->id_tipe )
                                      selected
                                  @endif
                          >
                          {{ $tipe -> nama_tipe }}
                          </option>
                         @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label>Kondisi</label>
                    <select name="id_kondisi" class="form-control select2" style="width: 100%;">
                         <option disabled="disabled" selected="selected">--Pilih--</option>
                         @foreach($kondisis as $kondisi)
                         <option 
                              value="{{ $kondisi -> id_kondisi }}"
                                  @if  ( $kondisi->id_kondisi === $kulkas->id_kondisi )
                                      selected
                                  @endif
                          >
                          {{ $kondisi -> nama_kondisi }}
                          </option>
                         @endforeach
                    </select>
                  </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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