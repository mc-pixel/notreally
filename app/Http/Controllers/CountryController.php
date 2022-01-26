<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countrys = Country::all();

        return view('country_index', compact('countrys'));
    }

    public function create()
    {
        return view('country_create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'=> 'required|string',
        ]);
        $country = Country::create('validator');

        return redirect('country_index', compact('country'));
    }

    public function destroy(Request $request, Country $country)
    {
        $country->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('country_index');
    }
}
