<div class="form-group" style="height: 500px;">
    <p align="center"><b>Hasil Akreditasi</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 80%;">
        <tr align="center">
            <td>No</td>
            <td>Komponen</td>
            <td>Nilai</td>
        </tr>
        @foreach ($cetak as $item)
        <tr>
            <td align="center">{{ $item->komponen_id }}</td>
            <td>{{ $item->nama_komponen }}</td>
            <td align="center">{{ $item->nilai}}</td>
        </tr>
        @endforeach
        <tfoot>
            <tr align="center">
                <td colspan="3">
                    Hasil Akhir: {{ $result }}
                    @if ($result >= 91 && $result <= 100)
                        (Akreditasi A - Baik Sekali)
                    @elseif ($result >= 76 && $result <= 90)
                        (Akreditasi B - Baik)
                    @elseif ($result >= 60 && $result <= 75)
                        (Akreditasi C - Cukup Baik)
                    @else
                        (Tidak Akreditasi)
                    @endif
                </td>
            </tr>
        </tfoot>
    </table>
    <div>
    <p>
    Keterangan:
    <br>
    1. Akreditasi A (Baik Sekali), bila Jumlah Skor (91 &lt; NA &lt; 100)
    <br>
    2. Akreditasi B (Baik), bila Jumlah Skor (76 &lt; NA &lt; 90)
    <br>
    3. Akreditasi C (Cukup Baik), bila Jumlah Skor (60 &lt; NA &lt; 75)
    <br>
    4. Tidak Akreditasi, bila Jumlah Skor (NA &lt; 60)
</p>

    </div>
</div>
