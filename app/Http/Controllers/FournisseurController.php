<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    //

    public function index (){
        $fournisseurs = Fournisseur::All();
        return view('Produits/fournisseur', compact('fournisseurs'));
    }
}
