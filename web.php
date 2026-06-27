<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FactureController;

use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;

Route::resource('clients', ClientController::class);
Route::resource('produits', ProduitController::class);
Route::resource('commandes', CommandeController::class);

Route::get('/facture/{id}/pdf', [FactureController::class, 'pdf'])
    ->name('facture.pdf');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'clients' => Client::count(),
        'produits' => Produit::count(),
        'commandes' => Commande::count(),
        'factures' => 0
    ]);
});

Route::get('/', function () {
    return redirect('/dashboard');
});
