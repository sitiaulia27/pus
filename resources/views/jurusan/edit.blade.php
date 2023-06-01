@extends('admin.index')


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Edit Jurusan</h1>
        </div>
        <x:notify-messages />
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('jurusan.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="namajurusan" class="form-label">Jurusan</label>
                            <input type="text" name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" required autofocus value="{{ $edit->nama_jurusan }}">
                        </div>

                        <a class="btn btn-info" href="{{ route('jurusan.index') }}">Back</a>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
