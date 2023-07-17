@extends('admin.index')

@section('title')
    {{ trans('Berita') }}
@endsection


@section('content')

<section class="section">
        <div class="section-header">
            <h1>Berita</h1>
        </div>
        <div class="card">
        <x:notify-messages />
            <div class="card-header">
                <a href="{{ route('berita.create') }}" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-2">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
@endsection

@push('page-scripts')
<script>
            $(function() {
                $('#table-2').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('berita.index.json') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                        },
                        {
                            data: 'judul',
                            name: 'judul'
                        },
                        {
                            data: 'slug',
                            name: 'slug'
                        },
                        {
                            data: 'body',
                            name: 'body'
                        },
                        {
                            data: 'image',
                            name: 'image'
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
