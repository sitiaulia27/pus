@extends('layouts.index')

@section('content')
<section class="tatatertib" id="tatatertib">
            <div class="container pt-5">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"><b>Berita</b></h2>
                        <h5 class="section-subheading text-muted">Perpustakaan Politeknik Negeri Indramayu</h5>
                    </div>
                    @foreach ($data as $row)
                    <img src="{{asset('images/posts-berita/'.$row->image)}}" class="img-fluid" width="100" class="card-img-top" alt="Gambar">

                    @endforeach
            </div>
</section>

@endsection
