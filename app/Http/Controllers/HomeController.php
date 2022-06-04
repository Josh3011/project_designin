<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$DetailJasa = DB::table('DetailJasa')->get();
        $DetailJasa = DB::table('DetailJasa')->paginate(4) ;


    	// mengirim data pegawai ke view index
    	return view('home',['DetailJasa' => $DetailJasa]);

    }
}
