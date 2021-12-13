<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminManage extends Model
{
    use HasFactory;
     public $timestamps = false;
    public $fillable = ['id','name', 'email'];

     public function AdminManage()
    {
        return $this->belongsToMany('App\Models\AdminManage');
    }
}
