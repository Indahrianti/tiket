@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Beranda

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-stream"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Asal Berangkat</span>
                        <span class="info-box-number">
                            {{$asal}} asal
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        
        <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ul"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Tujuan Berangkat</span>
                        <span class="info-box-number">
                        {{ $tujuan }} tujuan
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="far fa-folder-open"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Kereta</span>
                        <span class="info-box-number">
                            {{$kereta}} kereta 
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sign-in-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Penumpang</span>
                        <span class="info-box-number">
                            {{$penumpang}} penumpang 
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ul"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah transaksi</span>
                        <span class="info-box-number">
                        {{ $transaksi }} transaksi
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>

@endsection