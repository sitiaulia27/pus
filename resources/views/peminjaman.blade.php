@extends('layouts.index')

@section('content')
<br>
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-9">
                <div class="section-title">
                    <h2>Form Peminjaman</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom01">NIM</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom01">Kelas</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom02">Nama</label>
                            <input type="text" class="form-control" id="validationCustom02" value="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom04">Jurusan</label>
                            <select class="custom-select" id="validationCustom04" required>
                                <option selected disabled value="">Teknik Informatika</option>
                                <option>Teknik Mesin</option>
                                <option>Teknik Pendingin Dan Tata Udara</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Nomor Telepon</label>
                            <input type="text" class="form-control" id="validationCustom02" value="" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Judul Buku dan Pengarang</label>
                            <textarea class="form-control"name="pesan" required></textarea>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Tanggal Peminjam</label>
                            <input type="date" name="date" id="date" class="form-control" style="width: 100%; display: inline;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Tanggal Pengembalian</label>
                            <input type="date" name="date" id="date" class="form-control" style="width: 100%; display: inline;">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
