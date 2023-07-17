@extends('admin.index')

@section('title')
    {{ trans('Show berita') }}
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Detail Layanan</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><b>{{ $layanan->judul }}</b></h5>

            <center><img src="{{ asset('storage/' . $layanan->image) }}" width="500px" alt="layanan Image"></center>

            <p class="card-text">{!! ($layanan->body) !!}</p>
        </div>
    </div>
    <a href="{{ route('layanan.index') }}" class="btn btn-primary">Kembali</a>
</div>

@endsection
