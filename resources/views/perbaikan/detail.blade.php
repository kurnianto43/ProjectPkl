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
                              <td>{{ $perbaikan -> nomor_dokumen_perbaikan }}</td>
                            </tr>
                            <tr>
                              <td width="30%">Teknisi</td>
                              <td width="5%">:</td>
                              <td>{{ $perbaikan -> teknisi -> nama_teknisi}}</td>
                            </tr>
                            <tr>
                              <td>Kulkas</td>
                              <td>:</td>
                              <td>{{ $perbaikan -> kulkas -> nomor_asset }}</td>
                            </tr>
                            <tr>
                              <td>Tipe Pekerjaan</td>
                              <td>:</td>
                              <td>{{ $perbaikan -> tipepekerjaan -> kode_tipe_pekerjaan }}</td>
                            </tr>
                            <tr>
                              <td>Tanggal Perbaikan</td>
                              <td>:</td>
                              <td>{{ $perbaikan -> tanggal_perbaikan }}</td>
                            </tr>
                            <tr>
                              <td>Suku Cadang</td>
                              <td>:</td>
                              <td style="text-align: left;">{{ $perbaikan -> sukucadang -> nomor_sukucadang }} - {{ $perbaikan -> sukucadang -> nama_sukucadang }} ({{ $perbaikan -> jumlah_sukucadang }})</td>
                            </tr>
                            <tr>
                                <td>Temuan Masalah</td>
                                <td>:</td>
                                <td>
                                    {{ $perbaikan -> jenismasalah -> kode_masalah }} - {{ $perbaikan -> jenismasalah -> keterangan_masalah }}
                                </td>
                            </tr>
                            <tr>
                                <td>Biaya Perbaikan</td>
                                <td>:</td>
                                <td>
                                    Rp {{ number_format ($perbaikan -> biaya_perbaikan, 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Periode Tagihan</td>
                                <td>:</td>
                                <td>
                                    {{ $perbaikan -> tagihan -> periode_tagihan }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('perbaikan.edit', $perbaikan) }}" class="btn btn-warning">Ubah</a>
                    <a href="{{ route('perbaikan.index') }}" class="btn btn-default pull-right">Kembali</a>
                </div>
            </div>
            
        </div>
    </div>

@endsection

@section('script')

@endsection