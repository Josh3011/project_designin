<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailjasaController extends Controller
{
    return view('daftarjasa.listjasa1', ['daftarjasa' => $daftarjasa]);
}
