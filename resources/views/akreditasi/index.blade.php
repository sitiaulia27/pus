@extends('admin.index')

@section('title')
    {{ trans('Akreditasi') }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Akreditasi</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <x:notify-messages />
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-3">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Komponen</th>
                                        <th>Nilai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <td>Hasil Akhir</td>
                                        <td></td>
                                        <td>{{ $result }}</td>
                                        <td><a href="{{ route('getAkreditasi') }}" target="blank" class="btn btn-primary">Simpan PDF</a></td>
                                    </tr>

                                </tfoot>
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
            $('#table-3').dataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('akreditasi.index.json') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },
                    {
                        data: 'komponen',
                        name: 'komponen'
                    },
                    {
                        data: 'nilai',
                        name: 'nilai'
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
