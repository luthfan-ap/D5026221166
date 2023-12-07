@extends('master2')

@section('konten')
	<h3>Data Blueray</h3>

	<a href="/blueray">< Kembali</a>

	<br/>
	<br/>

<form action="/blueray/store" method="post">
    {{ csrf_field() }}
    {{-- MERK --}}
    <div class = "form-group row">
        <label for = "merk" class = "col-sm-2 control-label">Merk</label>
        <div class = "col-sm-8">
            <input name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukkan Merk Blueray">
        </div>
    </div>
    {{-- STOCK --}}
    <div class = "form-group row">
        <label for = "stock" class = "col-sm-2 control-label">Stock</label>
        <div class = "col-sm-8">
            <input name="stock" type = "number" class = "form-control" id = "stock" placeholder = "Masukkan Stock Blueray">
        </div>
    </div>

    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

</form>

@endsection
