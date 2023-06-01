@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Jurusan</h1>
        </div>
        <x:notify-messages />
        <div class="card">
            <div class="card-header">
                <a href="{{ route('jurusan.create') }}" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$row -> nama_jurusan}}</td>

                        <td>

                        <a class="btn btn-warning" href="{{('/jurusan/'.$row->id.'/edit/')}}" role="button"><i class="fa fa-edit"></i></a>
                        <form action ="{{ ('jurusan/'.$row->id) }}" method = "POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"  onclick="return confirm('apakah yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- {{ $data -> links() }} -->
            </div>
        </div>
</section>
@endsection
