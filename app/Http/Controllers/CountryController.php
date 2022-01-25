<?php

namespace App\Http\Controllers;

use App\Models\Country;

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
}
