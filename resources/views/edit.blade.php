@extends('master2')

    @section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

    <form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        {{-- NAMA --}}
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
                <input type = "text" required="required" class = "form-control" id = "nama" value = "{{ $p->pegawai_nama }}">
            </div>
        </div>
        {{-- JABATAN --}}
        <div class = "form-group row">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-8">
                <input name="jabatan" type = "text" class = "form-control" id = "jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        {{-- UMUR --}}
        <div class = "form-group row">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-8">
                <input name="umur" type = "number" class = "form-control" id = "umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        {{-- ALAMAT --}}
        <div class = "form-group row">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-8">
               <input name="alamat" type = "text" class = "form-control" id = "alamat" value="{{ $p->pegawai_alamat }}">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>

	</form>

	@endforeach
    @endsection

