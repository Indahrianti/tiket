@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Penumpang</div>
                    <!-- /.card-heading -->
                    <div class="card-body">
                        <form Action="{{ route('penumpang.store') }}" method="POST">

                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Penumpang</label>
                                    <input type="text" class="form-control" name="nama_penumpang">
                                </div>
                                <br>
                                <div class="form-group col-md-6">
                                    <label>Kereta Id</label>
                                    <select name="kereta_id" class="form-control">
                                        @foreach ($kereta as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_KA }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>

                                {{-- <div class="form-group">
                                                <label>Kereta Id</label>
                                                <select name="kereta_id" class="form-control">
                                                    @foreach ($kereta as $data)
                                                    <option value="{{$data->id}}">{{$data->keretas->nama_KA}}</option>
                                                    @endforeach
                                                </select>
    
                                             </div> --}}                 
                                <br>
                                <div class="form-group col-md-6">
                                    <label>Kelas</label>
                                    <select name="kelas" class="form-control">

                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="bisnis">Bisnis</option>

                                    </select>
                                </div>
                                <br>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Berangkat</label>
                                    <input type="date" class="form-control" name="tgl">
                                </div>
     
                                <div class="form-group col-md-6">
                                    <label>Jumlah</label>
                                    <select name="jml_penumpang" class="form-control">
                                            <option value="1 orang">1 orang</option>
                                            <option value="2 orang">2 orang</option>
                                            <option value="3 orang">3 orang</option>
                                        
                                    </select>
                                </div>                       </div>
                            <br>
                            <div class="form-group col-md-6">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
@endsection