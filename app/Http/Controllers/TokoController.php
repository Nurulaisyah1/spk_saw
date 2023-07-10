<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;
use App\Kriteria;

class TokoController extends Controller
{
     public function index()
    {
        $toko = Toko::all();
        return view('welcome')->with('tokoList', $toko);
    }
    
}
