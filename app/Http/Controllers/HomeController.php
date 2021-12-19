<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {   $today = date("Y-m-d");
        $acceuils = Produit::all();
        $categorie  = Categorie::all();
        $favorie=Produit::where('dt_fin_favorie','>',''.$today.'')->get();
        $slide = Produit::orderBy('id')->limit(5)->get();
        
         return view('acceuil', compact('acceuils','categorie','favorie','slide'));
    }

   
}