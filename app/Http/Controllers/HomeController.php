<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use session;
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {    $today = date("Y-m-d");
        $favorie=Produit::where('dt_fin_favorie','>',''.$today.'')->get();
        $acceuils = Produit::all();
         $categorie  = Categorie::all();
         return view('acceuil', compact('acceuils','categorie','favorie'));
        //return view('shop-left-sidebar', compact('acceuils','categorie'));
        //return redirect('useGestProd')->withOk("Produit " . $produit->nom_prd . " a été créé.");
    }

   
}