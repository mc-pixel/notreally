<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use App\Models\Country;
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
        $countries = Country::all();

        return view('bar_create', compact('countries'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'                => 'required|string',
            'country_id'          => 'required|exists:countries,id',
        ]);

        Bar::create($validator);

        return redirect('bar_index');
    }

    public function destroy(Request $request, Bar $bar)
    {
        $bar->delete();
        $request->session()->flash('message', 'Successfully sent this file back to oblivion!');

        return redirect('bar_index');
    }

    public function edit(Bar $bar)
    {
        return view('bar_index', compact('bar'));
    }

    public function update(Request $request, Bar $bar)
    {
        $validator = $request->validate([
            'name'                => 'required|string',
            'country_id'          => 'required|exists:countries,id',

        ]);
        $bar->update($validator);
    }
}
