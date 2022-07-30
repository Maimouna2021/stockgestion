<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //

    public function index (){
        $commandeProduits = Commande::All();
        return view('dasboard/commandeProduit', compact('commandeProduits'));
    }
}
