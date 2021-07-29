<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $dataAll = Ingredient::all();
        return view('pages.main', compact('dataAll'));
    }

    public function create () {
        return view('layouts.create');
    }

    public function store (Request $request) {
        $newIng = new Ingredient;
        $newIng->nom = $request->nom;
        $newIng->quantitee = $request->quantitee;
        $newIng->img = $request->img;
        $newIng->save();
        return redirect()->back();
    }

    public function destroy (Ingredient $id) {
        $id->delete();
        return redirect("/");
    }

    public function show (Ingredient $id) {
        $ingredient = $id;
        return view('pages.show', compact('ingredient'));
    }
}
