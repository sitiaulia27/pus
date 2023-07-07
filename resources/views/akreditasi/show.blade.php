@extends ('admin.index')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Penilaian</h1>
    </div>

    <style>
        ol {
            list-style-type: decimal;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('akreditasi.update',$komponen->komponen_id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="2" scope="col">No</th>
                                    <th scope="col" width="500px">Aspek</th>
                                    <th scope="col">Pilihan Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- looping sub -->
                                @php($urutan_per = 0)
                                @foreach ($sub as $s)
                                @php($urutan_sub = $loop->iteration)
                                <tr>
                                    <th colspan="2" scope="row">{{ $loop->iteration }}</th>
                                    <th colspan="2">{{ $s->nama_sub_komponen }}</th>
                                </tr>

                                <!-- looping sub-sub -->
                                @foreach ($subSub as $ss)
                                @if($ss->sub_komponen_id == $s->sub_komponen_id)
                                <tr>
                                    <th colspan="2" scope="row" style="text-align: right;">{{ $urutan_sub . '.' . $loop->iteration}}</th>
                                    <th colspan="2">{{ $ss->nama_sub_sub_komponen }}</th>
                                </tr>

                                <!-- looping pertanyaan di sub-sub -->
                                @foreach($pertanyaan as $tanya)
                                @if($tanya->sub_sub_komponen_id == $ss->sub_sub_komponen_id)
                                @php($urutan_per = $urutan_per +1)
                                @php( $cek_subtanya = 0 )
                                <tr>
                                    <td width="65px"></td>
                                    <td width="65px">{{ $urutan_per }}</td>
                                    <td>{{ $tanya->nama_pertanyaan}}</td>

                                    <!-- looping sub pertanyaan di sub sub -->
                                    @foreach($subPertanyaan as $st)
                                    @if($st->id_pertanyaan == $tanya->id_pertanyaan)
                                    @php( $cek_subtanya = $cek_subtanya + 1 )
                                    <!-- pilihan di sub pertanyaan -->
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $st->nama_sub_pertanyaan}}</td>
                                    <td style="padding: 10px;">
                                        @foreach($pilihanSub as $pilih)
                                        @if($pilih->sub_pertanyaan_id > 0 && $pilih->sub_pertanyaan_id != null && $pilih->sub_pertanyaan_id == $st->sub_pertanyaan_id)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?='pilihan_sub_' . $tanya->id_pertanyaan;?>" value="<?=$pilih->bobot?>" required> {{$pilih->nama_pilihan}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @if($cek_subtanya <= 0) <!-- pilihan di pertanyaan -->
                                    <td style="padding: 10px;">
                                        @foreach($pilihan as $pilih)
                                        @if($pilih->id_pertanyaan == $tanya->id_pertanyaan)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?='pilihan_' . $tanya->id_pertanyaan;?>" value="<?=$pilih->bobot?>" required> {{$pilih->nama_pilihan}}
                                        </div>
                                        @endif
                                        @endforeach
                                    </td>
                                    @endif
                                    </tr>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endforeach

                                    <!-- looping pertanyaan di sub -->
                                    @foreach($pertanyaan as $tanya)
                                    @if($tanya->sub_komponen_id == $s->sub_komponen_id && $tanya->sub_sub_komponen_id == null && $tanya->sub_sub_komponen_id <=0) <tr>
                                        @php( $urutan_per = $urutan_per +1 )
                                        <td width="65px"></td>
                                        <td width="65px">{{ $urutan_per }}</td>
                                        <td>{{ $tanya->nama_pertanyaan}}</td>
                                        @php( $cek_subtanya = 0 )

                                        <!-- looping sub pertanyaan di sub -->
                                        @foreach($subPertanyaan as $st)
                                        @if($st->id_pertanyaan == $tanya->id_pertanyaan)
                                        @php( $cek_subtanya = $cek_subtanya + 1 )

                                        <!-- pilihan di sub pertanyaan -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $st->nama_sub_pertanyaan}}</td>
                                            <td style="padding: 10px;">
                                                @foreach($pilihanSub as $pilih)
                                                @if($pilih->sub_pertanyaan_id > 0 && $pilih->sub_pertanyaan_id != null && $pilih->sub_pertanyaan_id == $st->sub_pertanyaan_id)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="<?='pilihan_sub_' . $tanya->id_pertanyaan;?>" value="<?=$pilih->bobot?>" required> {{$pilih->nama_pilihan}}
                                                </div>
                                                @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        @if($cek_subtanya <= 0) <!-- pilihan di pertanyaan -->
                                            <td style="padding: 10px;">
                                                @foreach($pilihan as $pilih)
                                                @if($pilih->id_pertanyaan == $tanya->id_pertanyaan)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="<?='pilihan_' . $tanya->id_pertanyaan;?>" value="<?=$pilih->bobot?>" required> {{$pilih->nama_pilihan}}
                                                </div>
                                                @endif
                                                @endforeach
                                            </td>
                                            @endif
                                            </tr>
                                            @endif
                                            @endforeach
                                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{ route('akreditasi.index') }}" class="btn btn-secondary">Kembali</a>
                <!-- <input type="submit" href="" value="Simpan" class="btn btn-success float-right"> -->
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</section>
@endsection