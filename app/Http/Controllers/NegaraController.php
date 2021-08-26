<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNegaraRequest;
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

    public function create(){
        return view('negara.create');
    }

    public function store(StoreNegaraRequest $request){
        Negara::create($request->all());
       return redirect()->route('negara.index')->with('success',"Negara $request->nama telah ditambahkan");
    }

    public function destroy(Negara $negara){
        $negara->kota()->delete();
        $negara->delete();
        return redirect()->route('negara.index')->with('delete',"$negara->nama dan kotanya telah dihapus");
    }

    public function edit(Negara $negara){
        return view('negara.edit',compact('negara'));
    }

    public function update(StoreNegaraRequest $request, Negara $negara){
        $negara->update($request->all());

        return redirect()->route('negara.show',$negara->id)->with('update',"$negara->nama telah diubah");
    }
}
