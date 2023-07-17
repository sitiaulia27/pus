@extends('layouts.index')

@section('title')
    {{ trans('Layanan Lainnya') }}
@endsection

@section('content')
<section class="tatatertib" id="tatatertib">
<div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <center><h2 class="text-uppercase"><b>{{ $layanan7->judul }}</b></h2></center>
                        <hr>
                        <center>@if ($layanan7->image)
                            <img class="img-fluid" src="{{ asset('storage/' . $layanan7->image) }}" style="max-width: 55%; height: auto;">
                            @else
                            <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                        @endif</center>
                        <div class="description pt-1 text-justify">
                            <p>{!! $layanan7->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <center><h2 class="text-uppercase"><b>{{ $layanan8->judul }}</b></h2>
                        </center>
                        <hr>
                        <center>@if ($layanan8->image)
                            <img class="img-fluid" src="{{ asset('storage/' . $layanan8->image) }}" style="max-width: 55%; height: auto;">
                            @else
                            <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                        @endif</center>
                        <div class="description pt-1 text-justify">
                            <p>{!! $layanan8->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <center><h2 class="text-uppercase mb-4"><b>{{ $layanan9->judul }}</b></h2></center>
                <hr>
                <center>@if ($layanan9->image)
                            <img class="img-fluid" src="{{ asset('storage/' . $layanan9->image) }}" style="max-width: 55%; height: auto;">
                            @else
                            <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                        @endif</center>
                <div class="description pt-1 text-justify">
                    <p>{!! $layanan9->body !!}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>


@endsection
