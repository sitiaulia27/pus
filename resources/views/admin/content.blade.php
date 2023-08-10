@extends('admin.index')

@section('title')
    {{ trans('Dashboard') }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <x:notify-messages />
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Data Karyawan</h4>
                        </div>
                        <a class="nav-link {{ setActive('karyawan.index') }}" href="{{ route('karyawan.index') }}">
                            <div class="card-body">{{ $count_data_karyawan }}</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Berita</h4>
                        </div>
                        <a class="nav-link {{ setActive('berita.index') }}" href="{{ route('berita.index') }}">
                        <div class="card-body">{{ $count_berita }}</div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
@endsection
