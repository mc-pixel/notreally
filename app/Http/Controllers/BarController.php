<?php

namespace App\Http\Controllers;
use App\Models\Bar;

class BarController extends Controller
{
    public function index()
    {
        $bars = Bar::all();

        return view('bar.index', compact('bars'));
    }

    public function create()
    {
        return view('bar.create');
    }
}
