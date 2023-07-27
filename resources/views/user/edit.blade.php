@extends('admin.index')

@section('title')
    {{ trans('Edit Profil') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Edit Profil</h1>
        </div>
        <div class="card">
            <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                        @csrf
            <div class="col-md-5">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama"><b>Nama</b></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                    <a class="btn btn-info" href="{{ route('admin.content') }}">Kembali</a>
                    <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
            </div>
        </div>
</section>

@endsection
