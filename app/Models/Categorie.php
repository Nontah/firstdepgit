<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public $timestamps = false;
	protected $fillable = ['id', 'libele', 'description','image','user_id'];


	 public function Categorie()
    {
        return $this->belongsToMany('App\Models\Categorie');
    }
}
