@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Penumpang
            <a href="{{ route('penumpang.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penumpang</th>
                        <th>Kereta</th>
                        <th>Asal Berangkat</th>
                        <th>Tujuan Berangkat</th>
                        <th>kelas</th>
                        <th>Tanggal</th>
                        <th>Jumlah penumpang</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($penumpang as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_penumpang}}</td>
                        <td>{{ $data->keretas->nama_KA}}</td>
                        <td>{{ $data->keretas->asals->asal_brangkat}}</td>
                        <td>{{ $data->keretas->tujuans->tujuan_brangkat}}</td>
                        <td>{{ $data->kelas}}</td>
                        <td>{{$data->tgl}}</td>
                        <td>{{ $data->jml_penumpang}}</td>

                        <td>
                    <div class="panel-body">
                        
                        <form action="{{route('penumpang.destroy', $data->id)}}" method="post">
                            <a href="{{ url('admin/transaksi/create') }}" class="btn btn-outline-warning">pesan</a>
                          
                            @method('delete')
                            @csrf
                            {{-- <a href="{{route('penumpang.edit',$data->id)}}" class="btn btn-success">Ubah</a>
                            <a href="{{route('penumpang.show',$data->id)}}" class="btn btn-warning">Tampil</a> --}}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
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
