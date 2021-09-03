<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSportsRequest;
use App\Negara;
use App\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller {
    public function index() {
        // show all medals from each country
        $negaras =  Negara::has('sports')
            ->withCount([
                'sports AS gold' => function ($query) {
                    $query->where('position', 1);
                },
                'sports AS silver' => function ($query) {
                    $query->where('position', 2);
                },
                'sports AS bronze' => function ($query) {
                    $query->where('position', 3);
                },
            ])
            ->orderByDesc('gold')
            ->orderByDesc('silver')
            ->orderByDesc('bronze')
            ->get();
        return view('sports.index', compact('negaras'));
    }

    public function create() {
        // input countries for every sports from position 1-3
        return view('sports.create', [
            'sports' => Sport::all(),
            'negaras' => Negara::all()
        ]);
    }

    public function store(StoreSportsRequest $storeSportsRequest) {
        // dd($storeSportsRequest->all());
        $sports = Sport::all();
        foreach ($storeSportsRequest->sports as $sport => $negaras) {
            $foundSport = $sports->find($sport);
            $position = 1;
            $medals = [];
            foreach ($negaras as $negara) {
                $medals[$negara] = ['position' => $position];
                $position++;
            }
            $foundSport->negaras()->sync($medals);
        }
        return redirect()->route('sports.index');
    }
}
