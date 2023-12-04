<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index(){

        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('indexNilai', ['nilaikuliah' => $nilaikuliah]);
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilai kuliah
        return redirect('/nilaikuliah');
        // tidak return view index, karena redirect melempar ke suatu url route pegawai, maka akan query all record

    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambahNilai');

    }
}
