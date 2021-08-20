<?php

namespace App\Http\Controllers;

use App\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    public function index(){
        return view('negara.index', [
            'negaras' => Negara::all()
        ]);
    }

    public function show(Negara $negara){
        $kotas = $negara->kota()->get();
        return view('negara.show', compact('negara','kotas'));
    }
}
