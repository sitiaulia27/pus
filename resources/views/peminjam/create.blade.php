@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Data Peminjam</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('peminjam.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" aria-describedby="nim" required autofocus value="{{old('nim') }}">
                        </div>
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control orm-control @error('nama') is-invalid @enderror" id="nama"  required autofocus value="{{old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="Kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="Kelas"  required autofocus value="{{old('kelas') }}">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan">Jurusan</label>
                                <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan_id"  required autofocus value="{{old('jurusan_id') }}">
                                    @foreach($jurusans as $jurusan)
                                    <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label for="judul_buku" class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku"  required autofocus value="{{old('judul_buku') }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_peminjam" class="form-label">Tanggal Pinjam</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control @error('tanggal_peminjaman') is-invalid @enderror" id="tanggal_peminjam"  required autofocus value="{{old('tanggal peminjam') }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control @error('tanggal_pengembalian') is-invalid @enderror" id="tanggal_kembali"  required autofocus value="{{old('tanggal_kembali') }}">
                        </div>
                        <div class="mb-3">
                        <label for="status">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" name="status_id" required autofocus value="{{old('status') }}" >
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{ $status -> nama_status}}</option>
                            @endforeach
                        </select>
                        </div>
                        <a class="btn btn-info" href="{{ route('peminjam.index') }}">Back</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">

                        <!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
