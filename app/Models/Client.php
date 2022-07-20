<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produit()
    {
        return $this->belongsToMany(Produit::class, 'produit_vendus', 'produit_id','client_id');
    }

}

