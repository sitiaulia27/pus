@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Jurusan</h1>
        </div>
        <x:notify-messages />
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror" id="jurusan" required autofocus value="{{old('nama_jurusan') }}">
                        </div>

                        <a class="btn btn-info" href="{{ route('jurusan.index') }}">Back</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
