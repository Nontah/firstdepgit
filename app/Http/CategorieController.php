<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieFormRequest;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use App\Http\Requests\CategorieUpdateRequest;

class CategorieController extends Controller
{

    /*public function __construct()
      {
          $this->middleware(['auth', 'isAdmin'])->except(['index', 'show']);
      }*/

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
          public function index()
          {
              $listCategorie = Categorie::orderByDesc('id')->paginate(4);
              $links = $listCategorie->setPath('')->render();
              return view('backCategorie.index', compact('listCategorie', 'links'));   
          }

        public function create()
        {
            $categorie = new Categorie();

            return view('backCategorie.create', compact('categorie'));
        }

       public function store(CategorieFormRequest $request)
        {
             
            $categorie = Categorie::create([
                'libele' => $request->libele,
                'description' => $request->description,
                'user_id' => '21',
            ]);

      
            return redirect()->route('categories.index', $categorie)->with('statut', 'Votre nouvelle categorie a été bien ajouté !');
        }
      
        /*public function show(Categorie $categorie)
        {
            return view('backCategorie.show', ['categorie' => $categorie]);

        }*/







          public function show(Produit $produit)
    {
        echo $produit;
         //return view('backProduit.show', ['produit' => $produit]);

    }














        public function edit(Categorie $categorie)
        {   
          
              return view('backCategorie.edit', compact('categorie'));

        }

        public function update(CategorieUpdateRequest $request, $id)
        {
          
            Categorie::where('id', $id)->update([
                  'libele' => $request->libele,
                  'description' => $request->description,
                  'user_id' => '21',
              ]);
                 return redirect()->route('backCategorie.index', $id)->with('statut', 'Votre categorie de prduit a été bien mise à jour !');
         
        }

      public function destroy($id)
      {   

           Categorie::where('id', $id)->destroy($id);
            return redirect()->route('categories.index', $id)->with('statut', 'Votre categorie de prduit a été bien Supprimer !');
       
      }
  

}
