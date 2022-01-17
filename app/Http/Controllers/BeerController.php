<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerController extends Controller
{
   public function index()
   {
       $beers = Beer::all();
       return view('beers.index',compact('beers',$beers));
   }
   public function create()
   {
       return view("beers.create");
   }
//   public function store(Request $request){
//
//       $request->validate([
//
//       ]);
//   }
}
