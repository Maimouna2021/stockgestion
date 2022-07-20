<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produit()
    {
        return $this->belongsToMany(Produit::class, 'produit_commande', 'Produit_id','Commande_id');
    }

}
