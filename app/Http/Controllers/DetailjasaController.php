<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailjasaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$DetailJasa = DB::table('DetailJasa')->get();
        $DetailJasa = DB::table('detailjasa')->fisrt() ;


    	// mengirim data pegawai ke view index
    	return view('daftarjasa.listjasa2', compact('detailjasa'));

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$DetailJasa = DB::table('DetailJasa')
		->where('kategori','like',"%".$cari."%")
        ->orWhere('harga','like',"%".$cari."%")
        ->orWhere('Judul','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('daftarjasa.listjasa2',['DetailJasa' => $DetailJasa]);

	}
}
