@extends('admin.index')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Akreditasi</h1>
    </div>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">No</th>
                            <th>Komponen-Komponen</th>
                            <th>Skor</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($data as $row)
                            <td class="text-center">{{ $loop->iteration}}</td>
                            <td>{{ $row->nama_komponen}}</td>
                            <td></td>
                            <td><div class="btn btn-primary btn-md"><i class="fa fa-eye"></i></div></td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</section>

@endsection
