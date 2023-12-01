@extends('master2')

    @section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<br/>

    @foreach($pegawai as $p)
    <form action="">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
                {{-- NAMA --}}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 control-label">Nama:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="nama" value="{{ $p->pegawai_nama }}">
                    </div>
                </div>
                {{-- JABATAN --}}
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>
                {{-- UMUR --}}
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 control-label">Umur:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="umur" value="{{ $p->pegawai_umur }}">
                    </div>
                </div>
                {{-- ALAMAT --}}
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 control-label">Alamat:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="alamat" value="{{ $p->pegawai_alamat }}">
                    </div>
                </div>

                <div class="col-sm-2 align-items-center mx-auto">
                    <a href="/pegawai" class="btn btn-primary col-sm-8">OK</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    @endsection
