<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('country_index', compact('countries'));
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

        Country::create($validator);

        return redirect('country_index');
    }

    public function destroy(Request $request, Country $country)
    {
        $country->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('country_index');
    }

    public function edit(Country $country)
    {
        return view('country_index', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $validator = $request->validate([
            'name'=> 'required|string',
        ]);
        $country->update($validator);
    }
}
