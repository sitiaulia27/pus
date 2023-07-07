@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Berita</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" required autofocus value="{{old('judul') }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <img class="img-preview img-fluid mb-3 col-sm-3">
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', '') }}" placeholder="Upload gambar" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-sm-12 col-md-17">
                                <textarea id="deskripsi" name="body"></textarea>
                            </div>
                        </div>
                        <a class="btn btn-info" href="{{ route('berita.index') }}">Kembali</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>

@endsection
@push('page-scripts')
<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script>
        $(function() {
            CKEDITOR.replace('deskripsi')
            console.log("ADA");
        })
    </script>
@endpush
