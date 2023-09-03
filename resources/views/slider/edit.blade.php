@extends('admin.index')

@section('title')
    {{ trans('Edit Slide') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Edit Slider</h1>
        </div>
        <div class="card">
            <form action="{{ route('slider.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                        @csrf
            <div class="col-md-5">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $edit->title }}">
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label">Image</label>
                        <input type="hidden" name="oldImage" value="{{$edit->image}}">
                        @if($edit->image)
                            <img src="{{ asset('storage/' . $edit->image)}}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-3">
                        @endif
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Upload gambar" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <a class="btn btn-info" href="{{ route('slider.index') }}">Kembali</a>
                    <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
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
