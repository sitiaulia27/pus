@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Data Peminjam</h1>
        </div>
        <div class="card">
            <x:notify-messages />
            <div class="card-header">
                <a href="{{ route('peminjam.create') }}" method="POST" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-md dTable table-bordered text-nowrap table-striped table-responsive">
                    <thead>
                        <tr>
                        <th scope="col-md-3">No</th>
                        <th scope="col-md-3">NIM</th>
                        <th scope="col-md-3">Nama</th>
                        <th scope="col-md-3">Kelas</th>
                        <th scope="col-md-3">Jurusan</th>
                        <th scope="col-md-3">Judul Buku dan Pengarang</th>
                        <th scope="col-md-3">Tanggal Pinjam</th>
                        <th scope="col-md-3">Tanggal Kembali</th>
                        <th scope="col-md-3">Status</th>
                        <th scope="col-md-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row )
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$row -> nim}}</td>
                        <td>{{$row -> nama}}</td>
                        <td>{{$row -> kelas}}</td>
                        <td>{{$row -> jurusan ->nama_jurusan}}</td>
                        <td>{{$row -> judul_buku}}</td>
                        <td>{{$row -> tanggal_peminjaman}}</td>
                        <td>{{$row -> tanggal_pengembalian}}</td>
                        <td>{{$row -> status ->nama_status}}</td>

                        <td>
                        <a class="btn btn-warning" href="{{('/peminjam/'.$row->id.'/edit/')}}" role="button"><i class="fa fa-edit"></i></a>
                        <form action ="{{ ('peminjam/'.$row->id) }}" method = "POST" class="d-inline">
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

<!--  -->
