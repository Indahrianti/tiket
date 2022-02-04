@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('transaksi.update', $transaksi->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                    <div class="panel-body">
                        <label>Nama Penumpang</label>
                        <input  type="text" name="penumpang_id" value="{{$transaksi->penumpangs->nama_penumpang}}" class="form-control" >
                    </div>
                    <div class="panel-body">
                        <label>jumlah</label>
                        <input type="text" class="form-control" name="jumlah">
                    </div>
                    <div class="panel-body">
                        <label>No Telepon</label>
                        <input  type="text" name="no_telp" class="form-control" >
                    </div>
                    <div class="panel-body">
                        <label>total</label>
                        <input type="text" class="form-control" name="total">
                    </div>
                    <br>
                    <div class="panel-body">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
            </form>
                    </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
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