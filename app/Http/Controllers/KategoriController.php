<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index()
    {
    	// mengambil data dari table blueray
    	// $blueray = DB::table('blueray')->get();

    	$kategori = DB::table('kategori')->get();
        // tergantung bagian mana yang mau ditampilkan
    	// mengirim data blueray ke view index
    	return view('folderKategori/index',['kategori' => $kategori]);

    }

    // method untuk view data blueray
    public function view(Request $request)
    {
        $kategori = $request->input('dropdown');
        return view('folderKategori/view', ['kategori' => $kategori]);

    }
}
