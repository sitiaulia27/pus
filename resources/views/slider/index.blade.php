@extends('admin.index')

@section('title')
    {{ trans('Slide') }}
@endsection


@section('content')
<section class="section">
<div class="section-header">
            <h1>Slider</h1>
        </div>
        <x:notify-messages />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="{{ route('slider.create') }}" method="POST" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-4">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th style="width: 350px;">Title</th>
                                <th>Image</th>
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
                $('#table-4').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('slider.index.json') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                        },
                        {
                            data: 'title',
                            name: 'title'
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
