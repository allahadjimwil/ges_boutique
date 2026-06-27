<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Barryvdh\DomPDF\Facade\Pdf;

class FactureController extends Controller
{
    public function pdf($id)
    {
        $commande = Commande::findOrFail($id);

        $pdf = Pdf::loadView('factures.pdf', compact('commande'));

        return $pdf->stream('facture.pdf');
    }
}

