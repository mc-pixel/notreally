<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Country;
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
        $countries = Country::all();

        return view('beers_create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'              => 'required|string',
            'type'              => 'required|string',
            'alcohol_percentage'=> 'required|integer',
            'year'              => 'required|integer',
            'country'           => 'required|exists:countries,id',

        ]);
        $beer = Beer::create($validator);

        return redirect('beer_index');
    }

    public function destroy(Request $request, Beer $beer)
    {
        $beer->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('beer_index');
    }

    public function edit(Beer $beer)
    {
        return view('beer_index', compact('beer'));
    }

    public function update(Request $request, Beer $beer)
    {
        $validator = $request->validate([
            'name'               => 'required|string',
            'type'               => 'required|string',
            'alcohol_percentage' => 'required|integer',
            'year'               => 'required|integer',
            'country'            => 'required|string',

        ]);
        $beer->update($validator);
    }
}
