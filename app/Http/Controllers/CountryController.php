<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::all();
        return view('country.index',compact('country',$country));
    }
    public function create()
    {
        return view("country.create");
    }
}
