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
        $validator = $request->validate([
            'name'              => 'required|string',
            'type'              => 'required|string',
            'alcohol_percentage'=> 'required|integer',
            'year'              => 'required|integer',
            'country'           => 'required|string',

        ]);
        $beer = Beer::create('validator');

        return redirect('beer_index', compact('beer'));
    }

    public function destroy(Request $request, Beer $beer)
    {
        $beer->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('beer_index');
    }

    //missing edit maybe implement show for later
}
