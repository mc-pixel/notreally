<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarController extends Controller
{
    public function index()
    {
        $bars = Bar::all();
        return view('bar.index',compact('bars',$bars));
    }
    public function create()
    {
        return view("bar.create");
    }
}
