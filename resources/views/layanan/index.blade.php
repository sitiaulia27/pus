@extends('admin.index')

@section('title')
    {{ trans('Layanan') }}
@endsection



@section('content')
<section class="section">
<div class="section-header">
            <h1>Layanan</h1>
        </div>
        <x:notify-messages />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="{{ route('layanan.create') }}" method="POST" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-6">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Judul</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Kategori</th>
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
                $('#table-6').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('layanan.index.json') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                        },
                        {
                            data: 'judul',
                            name: 'judul'
                        },
                        {
                            data: 'content',
                            name: 'content'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'kategori',
                            name: 'kategori'
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
