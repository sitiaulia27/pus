@extends('admin.index')

@section('title')
    {{ trans('Kategori') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Kategori</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Ketegori</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" required autofocus value="{{old('nama') }}">
                        </div>

                        <a class="btn btn-info" href="{{ route('kategori.index') }}">Kembali</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
