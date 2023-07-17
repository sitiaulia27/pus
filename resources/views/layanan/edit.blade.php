@extends('admin.index')

@section('title')
{{ trans('Edit') }}
@endsection

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Edit Layanan</h1>
    </div>
    <div class="card">
        <div class="col-md-7">
            <div class="card-body">
                <form action="{{ route('layanan.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                            id="judul" required autofocus value="{{ $edit->judul }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="col-sm-12 col-md-17">
                        <textarea id="deskripsi" name="body">{{ $edit->body }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-3"
                        src="{{ asset('storage/' . $edit->image) }}" alt="Preview Image">
                    <input type="file" id="image" name="image" class="form-control"
                        value="{{ old('image', $edit->image) }}" placeholder="Upload gambar"
                        onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kategori">Nama Kategori</label>
                    <select id="kategori" name="id" data-placeholder="kategori" class="custom-select w-100">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ $edit->kategori->id == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <a class="btn btn-info" href="{{ route('layanan.index') }}">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </form>
        </div>
    </div>
</div>
</section>
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection

@push('page-scripts')

<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function() {
        CKEDITOR.replace('deskripsi');
    });
</script>
@endpush
