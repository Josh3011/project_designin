<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailjasaController extends Controller
{
    return view('detailjasa.listjasa', ['detailjasa' => $detailjasa]);
}
