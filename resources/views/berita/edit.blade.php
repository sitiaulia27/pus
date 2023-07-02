@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Berita</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('berita.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" required autofocus value="{{ $edit->judul }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto" class="form-label">Image</label>
                            <input type="hidden" name="oldImage" value="{{$edit->image}}">
                            @if($edit->image)
                            <img src="{{ asset('storage/' . $edit->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">

                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-3">
                            @endif
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Upload gambar" onchange="previewImage()">
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
                                <textarea name="body" class="summernote">{{ $edit->body }}</textarea>
                            </div>
                        </div>



                        <a class="btn btn-info" href="{{ route('berita.index') }}">Kembali</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">

                    </form>
                </div>
            </div>
        </div>
</section>

<script>
$(document).ready(function() {
    $('.summernote').summernote({
    });
});
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
