@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Data Karyawan</h1>
        </div>
        <x:notify-messages />
        <div class="card">
            <div class="card-header">
                <a href="{{ route('karyawan.create') }}" method="POST" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row )
                        <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{$row -> nama}}</td>
                        <td>{{$row -> jabatan}}</td>
                        <td><img src="{{asset('storage/'.$row->foto)}}" width="100"></td>

                        <td>

                        <a class="btn btn-warning" href="{{('/karyawan/'.$row->id.'/edit/')}}" role="button"><i class="fa fa-edit"></i></a>
                        <form action ="{{ ('karyawan/'.$row->id) }}" method = "POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"  onclick="return confirm('apakah yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>
@endsection
