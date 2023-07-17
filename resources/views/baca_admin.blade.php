@extends('layouts.index')

@section('title')
    {{ trans('Layanan Baca & Layanan Admin') }}
@endsection

@section('content')
<section class="bacadanadmin" id="bacadanadmin">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <center><h2 class="text-uppercase mb-4"><b>{{ $layanan3-> judul}}</b></h2></center>
                <hr>
                <center>@if ($layanan3->image)
                        <img class="img-fluid" src="{{ asset('storage/' . $layanan3->image) }}" style="max-width: 55%; height: auto;">
                    @else
                        <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                    @endif</center>
                <div class="description pt-1 text-justify">
                    <p>{!! $layanan3->body !!}</p>
                </div>
            </div>
            <div class="col-md-6">
            <center><h2 class="text-uppercase mb-4"><b>{{ $layanan4->judul }}</b></h2></center>
                <hr>
                <center>@if ($layanan4->image)
                        <img class="img-fluid" src="{{ asset('storage/' . $layanan4->image) }}" style="max-width: 55%; height: auto;">
                    @else
                        <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                    @endif</center>
                <div class="description pt-1 text-justify">
                    <p>{!! $layanan4->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
