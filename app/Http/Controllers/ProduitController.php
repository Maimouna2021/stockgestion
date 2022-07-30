<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller{

    /*dans cette fonction nous allon
        récupérer 1=>l'ensemble des produits 
        2=>le stocker dans une variable ,
        3=> renvoyer l'utilisateur dans la view produits.index(liste des produits)
    */

    public function index (){
        $produits = Produit::All();
        return view('dasboard/produit', compact('produits'));
    }

 
}