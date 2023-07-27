@extends('admin.index')

@section('title')
    {{ trans('Edit karyawan') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Edit Data Karyawan</h1>
        </div>
        <div class="card">
            <form action="{{ route('karyawan.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                        @csrf
            <div class="col-md-5">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $edit->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" name="posisi" class="form-control @error('posisi') is-invalid @enderror" id="posisi" value="{{ $edit->posisi }}">
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="hidden" name="oldImage" value="{{$edit->foto}}">
                        @if($edit->foto)
                            <img src="{{ asset('storage/' . $edit->foto)}}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-3">
                        @endif
                            <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Upload gambar" onchange="previewImage()">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <a class="btn btn-info" href="{{ route('karyawan.index') }}">Kembali</a>
                    <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
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
