@extends('admin.index')

@section('title')
    {{ trans('Show berita') }}
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Detail Berita</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $berita->judul }}</h5>
            <p class="card-text">{!! html_entity_decode($berita->body) !!}</p>
            <img src="{{ asset('storage/' . $berita->image) }}" width="300" alt="Berita Image">
        </div>
    </div>
    <a href="{{ route('berita.index') }}" class="btn btn-primary">Kembali</a>
</div>

@endsection
