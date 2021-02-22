<?php

namespace App\Http\Controllers;

use App\Models\Ad ;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore ;

class Adcontroller extends Controller
{
    public function create()
    {
        return view('create'); 
    }

    public function store(Adstore $request)
    {
        $validated = $request->validated();

        $ad = new Ad();
        $ad->title = $validated['title'];
        $ad->description = $validated['description'];
        $ad->price = $validated['price'];
        $ad->localisation = $validated['localisation'];
        $ad->user_id = auth()->user()->id;

        $ad->save();

        return redirect()->route('welcome')->with('success', 'Votre annonce a été bien posté');

    }
}
