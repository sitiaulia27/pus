@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Edit Peminjam</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('peminjam.update', $edit->id) }}" method="POST">
                    @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" value="{{ $edit->nim }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $edit->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" value="{{ $edit->kelas }}">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan">Jurusan</label>
                                <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan_id" value="{{ $edit->jurusan }}">
                                    @foreach($jurusans as $jurusan)
                                    <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label for="judulbuku" class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" value="{{ $edit->judul_buku }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_peminjaman" class="form-label">Tanggal Pinjam</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control @error('tanggal_peminjaman') is-invalid @enderror" id="tanggal_peminjaman" value="{{ $edit->tanggal_peminjaman }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Kembali</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control @error('tanggal_pengembalian') is-invalid @enderror" id="tanggal_pengembalian" value="{{ $edit->tanggal_pengembalian }}">
                        </div>
                        <div class="mb-3">
                        <label for="status">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" name="status_id" value="{{ $edit->status }}">
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
