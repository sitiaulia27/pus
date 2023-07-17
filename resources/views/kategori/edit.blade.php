@extends('admin.index')

@section('title')
    {{ trans('Edit Kategori') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Edit Kategori</h1>
        </div>
        <div class="card">
            <form action="{{ route('kategori.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                        @csrf
            <div class="col-md-5">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $edit->nama }}">
                    </div>

                    <a class="btn btn-info" href="{{ route('kategori.index') }}">Kembali</a>
                    <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
            </div>
        </div>
</section>

@endsection
