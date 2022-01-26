<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Http\Request;

class BarController extends Controller
{
    public function index()
    {
        $bars = Bar::all();

        return view('bar_index', compact('bars'));
    }

    public function create()
    {
        return view('bar_create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'              => 'required|string',
            'location'          => 'required|string',

        ]);
        $bar = Bar::create('validator');

        return redirect('bar_index', compact('bar'));
    }

    public function destroy(Request $request, Bar $bar)
    {
        $bar->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('bar_index');
    }
}
