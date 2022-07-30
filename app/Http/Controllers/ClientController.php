<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        $clients = Client::All();
        return view('Produits/client', compact('clients'));
    }
}
