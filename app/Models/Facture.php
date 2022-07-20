<?php

namespace App\Models;



use App\Models\Produit_Vendu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function produit__vendu()
    {
        return $this->hasMany(Produit_Vendu::class);
    }

}
