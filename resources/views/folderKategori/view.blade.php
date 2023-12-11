@extends('masterEAS')

    @section('konten')
	<br/>

    <form action="">
        {{ csrf_field() }}

        <div class="col-8">
            <p>Anda telah memilih Kategori</p>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 control-label">Kode:</label>
                <div class="col-sm-8">
                    {{ $kategori }}
                </div>
            </div>
        </div>
    </form>

    @endsection
