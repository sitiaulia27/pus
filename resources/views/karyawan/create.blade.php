@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Tambah Data Karyawan</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="Nama" required autofocus value="{{old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control @error('nim') is-invalid @enderror" id="jabatan" required autofocus value="{{old('jabatan') }}">
                        </div>
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <img class="img-preview img-fluid mb-3 col-sm-3">
                            <input type="file" id="foto" name="foto" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('foto', '') }}" placeholder="Upload gambar" onchange="previewImage()">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                        <a class="btn btn-info" href="{{ route('karyawan.index') }}">Back</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
<script>
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
</script>
@endsection
