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
                            <h4><p>Data Karyawan</p></h4>
                        </div>
                        <div class="card-body">{{ $count_data_karyawan }}</div>
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
                        <div class="card-body">{{ $count_berita }}</div>
                    </div>
                </div>
            </div>
    </section>
@endsection
