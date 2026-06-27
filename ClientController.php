<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->route('clients.index')
                         ->with('success', 'Client ajouté avec succès');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index')
                         ->with('success', 'Client modifié avec succès');
    }

    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')
                         ->with('success', 'Client supprimé avec succès');
    }
}
