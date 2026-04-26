<h3>Hasil Ujian</h3>

<p>Nilai: {{ $nilai }}</p>

@if($nilai >= 90)
    <p>A (Sangat Baik)</p>
@elseif($nilai >= 75)
    <p>B (Baik)</p>
@elseif($nilai >= 60)
    <p>C (Cukup)</p>
@else
    <p>D (Kurang)</p>
@endif

@unless($nilai >= 75)
    <p style="color:red;">Siswa belum lulus</p>
@endunless