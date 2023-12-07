@extends('master2')
@section('title', 'Database Blueray')

@section('judul_halaman')
<h3>Data Blueray</h3>

<a href="/blueray/tambah"> + Tambah Blueray Baru</a>

<br/>
<br/>
@endsection

@section('konten')
	<p>Cari Data Blueray :</p>
	<form action="/blueray/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Blueray Berdasarkan Nama..." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Blueray</th>
			<th>Merk Blueray</th>
			<th>Stock Blueray</th>
			<th>Ketersediaan (Y/N)</th>
			<th>Opsi</th>
		</tr>
		@foreach($blueray as $b)
		<tr>
			<td>{{ $b->kodeblueray }}</td>
			<td>{{ $b->merkblueray }}</td>
			<td>{{ $b->stockblueray }}</td>
			@if($b->stockblueray > 0)
                <td style="background-color: blue; color: white;">Y</td>
            @else
                <td style="background-color: red; color: white;">N</td>
            @endif
			<td>
				<a href="/blueray/view/{{ $b->kodeblueray }}" class="btn btn-success">View</a>
				|
				<a href="/blueray/edit/{{ $b->kodeblueray }}" class="btn btn-warning">Edit</a>
				|
				<a href="/blueray/hapus/{{ $b->kodeblueray }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
