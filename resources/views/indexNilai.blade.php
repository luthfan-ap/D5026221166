@extends('master2')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
<h3>Data Nilai Kuliah</h3>

<a href="/nilaikuliah/tambahNilai"> + Tambah Data Baru</a>

<br/>
<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
			@if ($n ->NilaiAngka >= 81)
                <td>A</td>
			@elseif ($n ->NilaiAngka >= 61 && $n ->NilaiAngka <= 81)
                <td>B</td>
			@elseif ($n ->NilaiAngka >= 41 && $n ->NilaiAngka <= 60)
                <td>C</td>
			@elseif ($n ->NilaiAngka <= 40)
                <td>D</td>
            @endif
			<td>{{ $n->NilaiAngka*$n->SKS }}</td>
		</tr>
		@endforeach
	</table>

@endsection
