@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Berita</h1>
        </div>
        <div class="card">
        <x:notify-messages />
            <div class="card-header">
                <a href="{{ route('berita.create') }}" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Body</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$row -> judul}}</td>
                        <td>{{$row -> slug}}</td>
                        <td>
                            <div class="body-content" style="overflow: auto; height: 200px;">
                                {!! $row->body !!}
                            </div>
                        </td>
                        <td><img src="{{asset('images/posts-berita/'.$row->image)}}" width="100"></td>
                        <td>
                        <a class="btn btn-info mr-2" href="{{ route('berita.show', $row->id) }}" role="button"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning mr-2" href="{{('/berita/'.$row->id.'/edit/')}}" role="button"><i class="fa fa-edit"></i></a>
                        <form action ="{{ ('berita/'.$row->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
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
