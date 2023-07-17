@extends('layouts.index')

@section('title')
    {{ trans('Layanan Sirkulasi & Referensi') }}
@endsection

@section('content')
<section class="sirkuf" id="sirkuf">
            <div class="container pt-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><b>{{ $layanan1->judul }}</b></h2>
                    @if ($layanan1->image)
                        <img class="img-fluid" src="{{ asset('storage/' . $layanan1->image) }}" style="max-width: 55%; height: auto;">
                    @else
                        <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                    @endif
                </div>
                <div class="timeline-panel pt-3 text-justify">
                    <div class="description">
                        <h5>{!! $layanan1->body !!}</h5>
                    </div>
                </div>
            </div>

            <div class="container pt-5">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"><b>{{ $layanan2->judul }}</b></h2>
                        @if ($layanan2->image)
                            <img class="img-fluid" src="{{ asset('storage/' . $layanan2->image) }}" style="max-width: 55%; height: auto;">
                        @else
                            <img class="img-fluid" src="" style="max-width: 55%; height: auto;">
                        @endif
                    </div>
                    <div class="timeline-panel pt-3 text-justify">
                            <div class="description">
                            <h5>{!! $layanan2->body !!}</h5>
                            </div>
                    </div>
            </div>
</section>

@endsection
