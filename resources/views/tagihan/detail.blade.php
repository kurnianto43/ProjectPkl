@extends('layouts.master')


@section('title')
Data Perbaikan
@endsection

@section('link')

@endsection

@section('content_header')
        <h1>
            Perbaikan
        </h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-plug"></i> Data Perbaikan</a></li>
        <li class="active">Rincian</li>
      </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Rincian</h3>
                    <div class="box-body">
                       <table class="table table-hover">
                            <tr>
                              <td>Nomor Dokumen</td>
                              <td>:</td>
                              <td>{{ $tagihan-> nomor_dokumen }}</td>
                            </tr>
                            <tr>
                              <td width="30%">Periode Tagihan</td>
                              <td width="5%">:</td>
                              <td>{{ $tagihan -> periode_tagihan }}</td>
                            </tr>
                            <tr>
                              <td>Jumlah Item</td>
                              <td>:</td>
                              <td>{{ $item }}</td>
                            </tr>
                            <tr>
                              <td>Total Tagihan</td>
                              <td>:</td>
                              <td>{{ $data }}</td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('tes') }}" class="btn btn-info">Cetak</a>
                    <a href="{{ route('tagihan.index') }}" class="btn btn-default pull-right">Kembali</a>
                </div>
            </div>
            
        </div>
    </div>

@endsection

@section('script')

@endsection