<?php

namespace App\Http\Controllers;

use App\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        $kotas = Kota::with('negara')->get();
        return view('kota.index', compact('kotas'));
    }
    
}
