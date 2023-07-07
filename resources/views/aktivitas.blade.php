@extends('layouts.index')

@section('content')
<section class="aktivias" id="aktivitas">
    <div class="container pt-5">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><b>Aktivitas Pengunjung</b></h2>
        </div>

        <div class="card card-success">
            <div class="card-header">

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<center><div class="card" style="width: 25rem;">
    <div class="card-header">
        <h5 class="card-title">Buku yang Sering Dipinjam Bulan Ini</h5>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">
            @if (isset($peminjaman))
                <ul class="list-group">
                        <li class="list-group-item">
                            {{ $peminjaman->book_name }}
                        </li>
                </ul>
            @else
                <p>Tidak ada data buku untuk bulan ini.</p>
            @endif

            @if (isset($errorMessage))
                <p>{{ $errorMessage }}</p>
            @endif
            </li>
        </ul>
    </div>
</div></center>






<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const labels = {!! json_encode($labels) !!};
        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pengunjung',
                data: {!! json_encode($bulanCount) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        var ctx = document.getElementById('barChart').getContext('2d');
        new Chart(ctx, config);
    });
</script>
@endsection
