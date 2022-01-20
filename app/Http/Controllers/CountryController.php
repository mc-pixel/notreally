<?php

namespace App\Http\Controllers;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::all();

        return view('country.index', compact('country', $country));
    }

    public function create()
    {
        return view('country.create');
    }
}
