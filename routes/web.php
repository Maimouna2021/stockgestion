<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FournisseurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ajoutProduit', function () {
    return view('dasboard.ajoutProduit');
});

Route::get('/factureProduits', function () {
    return view('Produits/factureProduits');
});

Route::get('/stockProduit', function () {
    return view('Produits/stockProduit');
});

Route::get('/vente', function () {
    return view('Produits/vente');
});

Route::get('/404', function () {
    return view('dasboard/404');
});

Route::get('/500', function () {
    return view('dasboard/500');
});

Route::get('/charts', function () {
    return view('dasboard/charts');
});

Route::get('/', function () {
    return view('dasboard/index');
});

Route::get('/layout-sidenav-light', function () {
    return view('dasboard/layout-sidenav-light');
});

Route::get('/layout-static', function () {
    return view('dasboard/layout-static');
});

Route::get('/login', function () {
    return view('dasboard/login');
});

Route::get('/password', function () {
    return view('dasboard/password');
});

Route::get('/register', function () {
    return view('dasboard/register');
});


Route::get('/produit', [ProduitController::class, 'index']);
Route::get('/client', [ClientController::class, 'index']);
Route::get('/fournisseur', [FournisseurController::class, 'index']);
Route::get('/commandeProduit', [CommandeController::class, 'index']);





Route::get('/tables', function () {
    return view('dasboard/tables');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
