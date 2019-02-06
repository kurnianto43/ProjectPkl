@extends('layouts.master')

@section('title')
    Beranda
@endsection

@section('content_header')
   
@endsection

@section('content')
    
         <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $kulkascount }}</h3>

              <p>Kulkas Instore</p>
            </div>
            <div class="icon">
              <i class="fa fa-plug"></i>
            </div>
            <a href="#" class="small-box-footer">
              Rincian... <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $perbaikancount }}</h3>

              <p>Total Perbaikan</p>
            </div>
            <div class="icon">
              <i class="fa fa-cog"></i>
            </div>
            <a href="#" class="small-box-footer">
              Rincian... <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
      <!-- /.row -->

@endsection