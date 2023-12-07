<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BluerayController extends Controller
{
    public function index()
    {
    	// mengambil data dari table blueray
    	// $blueray = DB::table('blueray')->get();

    	$blueray = DB::table('blueray')->get();
        // tergantung bagian mana yang mau ditampilkan
    	// mengirim data blueray ke view index
    	return view('index',['blueray' => $blueray]);

    }

    // method untuk menampilkan view form tambah blueray
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');

    }

    // method untuk insert data ke table blueray
    public function store(Request $request)
    {
        $tersedia = ($request->stock > 0) ? 'Y' : 'N';
        // insert data ke table blueray
        DB::table('blueray')->insert([
            'merkblueray' => $request->merk,
            'stockblueray' => $request->stock,
            'tersedia' => $tersedia
        ]);
        // alihkan halaman ke halaman blueray
        return redirect('/blueray');
        // tidak return view index, karena redirect melempar ke suatu url route blueray, maka akan query all record

    }

    // method untuk edit data blueray
    public function edit($kode)
    {
        // mengambil data blueray berdasarkan kode yang dipilih
        $blueray = DB::table('blueray')
            ->where('kodeblueray',$kode)
            ->get();
            // passing data blueray yang didapat ke view edit.blade.php
        return view('edit',['blueray' => $blueray]);

    }

    // update data blueray
    public function update(Request $request)
    {
        $tersedia = ($request->stock > 0) ? 'Y' : 'N';
        // update data blueray
        DB::table('blueray')
            ->where('kodeblueray',$request->kode)
            ->update([

            'merkblueray' => $request->merk,
            'stockblueray' => $request->stock,
            'tersedia' => $tersedia
        ]);
        // alihkan halaman ke halaman blueray
        return redirect('/blueray');
    }

    // method untuk hapus data blueray
    public function hapus($kode)
    {
        // menghapus data blueray berdasarkan kode yang dipilih
        DB::table('blueray')->where('kodeblueray',$kode)->delete();

        // alihkan halaman ke halaman blueray
        return redirect('/blueray');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table blueray sesuai pencarian data
        $blueray = DB::table('blueray')
            ->where('merkblueray', 'like', "%".$cari."%")
            ->paginate();

            return view('index', ['blueray' => $blueray]);
    }

    // method untuk view data blueray
    public function view($kode)
    {
        // mengambil data blueray berdasarkan kode yang dipilih
        $blueray = DB::table('blueray')
            ->where('kodeblueray', $kode)
            ->get();
        // passing data blueray yang didapat ke view edit.blade.php
        return view('view',['blueray' => $blueray]);

    }
}
