<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {
        Produit::create($request->all());

        return redirect()->route('produits.index');
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit', compact('produit'));
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());

        return redirect()->route('produits.index');
    }

    public function destroy($id)
    {
        Produit::destroy($id);

        return redirect()->route('produits.index');
    }
}
