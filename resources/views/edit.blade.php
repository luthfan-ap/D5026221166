@extends('master2')

    @section('konten')
	<h3>Edit Data Blueray</h3>

	<a href="/blueray"> Kembali</a>

	<br/>
	<br/>

	@foreach($blueray as $b)

    <form action="/blueray/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $b->kodeblueray }}"> <br />
        {{-- MERK --}}
        <div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-8">
                <input name="merk" type = "text" required="required" class = "form-control" id = "merk" value = "{{ $b->merkblueray }}">
            </div>
        </div>
        {{-- STOCK --}}
        <div class = "form-group row">
            <label for = "stock" class = "col-sm-2 control-label">Stock</label>
            <div class = "col-sm-8">
                <input name="stock" type = "number" class = "form-control" id = "stock" value="{{ $b->stockblueray }}">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>

	</form>

	@endforeach
    @endsection

