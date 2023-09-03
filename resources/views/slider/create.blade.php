@extends('admin.index')

@section('title')
    {{ trans('Slider') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Slider</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required autofocus value="{{old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <img class="img-preview img-fluid mb-3 col-sm-3">
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', '') }}" placeholder="Upload gambar" onchange="previewImage()">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                        <a class="btn btn-info" href="{{ route('slider.index') }}">Kembali</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
<script>
    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
}
</script>
@endsection
