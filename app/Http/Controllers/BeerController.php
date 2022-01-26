<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function index()
    {
        $beers = Beer::all();

        return view('beer_index', compact('beers'));
    }

    public function create()
    {
        return view('beers_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string',
            'type'              => 'required|string',
            'alcohol_percentage'=> 'required|integer',
            'year'              => 'required|integer',
            'country'           => 'required|string',

        ]);
        $beer = Beer::create([
            'name'              => $request->name,
            'type'              => $request->type,
            'alcohol_percentage'=> $request->alcohol_percentage,
            'year'              => $request->year,
            'country'           => $request->country,
        ]);

        return redirect('beer_index', compact('beer'));
    }

    public function destroy(Request $request, Beer $beer)
    {
        $beer->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('beer_index');
    }
}
