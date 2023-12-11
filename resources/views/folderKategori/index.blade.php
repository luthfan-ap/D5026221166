@extends('masterEAS')
@section('title', 'Database Kategori')

@section('judul_halaman')
<h3>Pilih Kategori</h3>

@endsection

@section('konten')
<form action="/kategori/view">
    <label for="Nama"></label>
    <select name="dropdown" id="dropdown">
        @foreach($kategori as $k)
            <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
        @endforeach
        </select>
        <br><br>
        <div class="col-sm-2 align-items-center">
            <input type="submit" class="btn btn-primary" value="KIRIM">
        </div>
    </form>

    <div class = "form-group row">
        <div class = "col-sm-8">
            <input name = "Nama" type = "combo-box" required="required" class = "dropdown-menu" id = "Nama" value = "{{ $k->Nama }}">
        </div>
    </div>


@endsection
