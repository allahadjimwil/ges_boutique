<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\LigneCommande;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::with('client')->get();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        $clients = Client::all();
        $produits = Produit::all();

        return view('commandes.create', compact('clients', 'produits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'produit_id' => 'required',
            'date_commande' => 'required',
            'quantite' => 'required|integer|min:1',
        ]);

        $produit = Produit::findOrFail($request->produit_id);

        if ($produit->stock < $request->quantite) {
            return back()->with('error', 'Stock insuffisant.');
        }

        $montant = $produit->prix_unitaire * $request->quantite;

        $commande = Commande::create([
            'client_id' => $request->client_id,
            'date_commande' => $request->date_commande,
            'montant_total' => $montant,
        ]);

        LigneCommande::create([
            'commande_id' => $commande->id,
            'produit_id' => $produit->id,
            'quantite' => $request->quantite,
            'prix_unitaire' => $produit->prix_unitaire,
        ]);

        $produit->stock -= $request->quantite;
        $produit->save();

        return redirect()->route('commandes.index')
            ->with('success', 'Commande enregistrée avec succès.');
    }

    public function show(Commande $commande)
    {
        //
    }

    public function edit(Commande $commande)
    {
        //
    }

    public function update(Request $request, Commande $commande)
    {
        //
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();

        return redirect()->route('commandes.index')
            ->with('success', 'Commande supprimée avec succès.');
    }
}
