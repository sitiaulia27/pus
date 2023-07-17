@extends('admin.index')

@section('title')
    {{ trans('Karyawan') }}
@endsection


@section('content')
<section class="section">
<div class="section-header">
            <h1>Data Karyawan</h1>
        </div>
        <x:notify-messages />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="{{ route('karyawan.create') }}" method="POST" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection


@push('page-scripts')
<script>
            $(function() {
                $('#table-1').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('karyawan.index.json') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                        },
                        {
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'posisi',
                            name: 'posisi'
                        },
                        {
                            data: 'foto',
                            name: 'foto'
                        },
                        {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                        }
                    ],
                })
            })
    </script>
@endpush
