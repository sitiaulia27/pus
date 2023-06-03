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
                        <!-- <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug') }}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->

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
                            <input id="body" type="hidden" name="body">
                            <trix-editor input="body"></trix-editor>
                        </div>


                        <a class="btn btn-info" href="{{ route('berita.index') }}">Back</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">

                        <!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
                    </form>
                </div>
            </div>
        </div>
</section>

<script>
    $(document).ready(function() {
        $("#summernote").summernote();
        $('.dropdown-toggle').dropdown();
    })
</script>

<!-- <script>
    function previewImage(){
    const image = document.querySelector('#foto');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
}
</script> -->

@endsection
