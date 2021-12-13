<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = ['designation', 'prix', 'description', 'quantite', 'category_id', 'image','user_id','dt_debut_favorie','dt_fin_favorie'];


     public function Produit()
    {
        return $this->belongsToMany('App\Models\Produit');
    }

}
