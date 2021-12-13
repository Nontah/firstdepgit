<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use App\Http\Requests\CategorieUpdateRequest;
use App\Http\Requests\SearchcRequest;
use Image;

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
              $listCategorie = Categorie::orderByDesc('id')
              ->paginate(4)
              ->setPath('');
        
            //  ->render(); delete render
              return view('backCategorie.index', compact('listCategorie'));   
          }

        public function create()
        {
            return view('backCategorie.create');
        }

        public function store(CategorieFormRequest $request)
        {

              $image='1';
              $image += Categorie::orderByDesc('id')->first()->id;

              if ($request->file('image'))
              {
                  $extension =  $request->file('image')->getClientOriginalExtension();
                  $imageName =   $image. '.' . $extension;
                  $request->file('image')->move('img/catimg/', $imageName);
                  $imagePath = public_path() . '/img/catimg/' . $imageName;
                  $image_resize = Image::make($imagePath);
                  $image_resize->resize(324,324);
                  $image_resize->save(public_path('/img/catimg/'. $imageName));
              }
             
            $categorie = Categorie::create([
                'libele' => $request->libele,
                'description' => $request->description,
                'image' => $imageName,
                'user_id' => Auth::user()->id,
             
            ]);

          return redirect()->route('categorie.index', $categorie)->withOk("statut "  .$categorie->libele. " a été bien ajouté à la liste de vos catégorie de produit!");
        }




      
        public function show(Categorie $categorie)
        {
            return view('backCategorie.show', ['categorie' => $categorie]);

        }

        public function edit(Categorie $categorie)
        {   
           
             return view('backCategorie.edit', compact('categorie'));

        }
//CategorieUpdate
        public function update(Request $request, $id)
        {

           $imageName =$id;
           
            if ($request->file('imagecat'))
            {


               $request->validate([
                 
                    'imagecat' => 'required|mimes:png,jpg,jpeg,gif,bmp,svg',
                ]);
                
                $extension =  $request->file('imagecat')->getClientOriginalExtension();
                $imageName =   $id. '.' . $extension;
                $request->file('imagecat')->move('img/catimg/', $imageName);

                $imagePath = public_path() . '/img/catimg/' . $imageName;
                $image_resize = Image::make($imagePath);
                $image_resize->resize(324,324);
                $image_resize->save(public_path('/img/catimg/'. $imageName));
            
          
                categorie::where('id', $id)->update([
                'image' => $imageName,
                  ]);
            }


            if($request->libele)
            {

                $request->validate([
                  'libele' => 'required|min:3|max:50|unique:categories,libele',
                    'description' => 'required|min:3|max:255',
                    //'imagecat' => 'required|mimes:png,jpg,jpeg,gif,bmp,svg',
                ]);
                

                $categorie = $request->libele;
                categorie::where('id', $id)->update([
                      'libele' => $request->libele,
                      'description' => $request->description,
                   
                ]);
            }
           
           

            return redirect()->route('categorie.index', $categorie)->withMo("statut "  .$categorie. " a été bien modifié !");

                 //return redirect()->route('categorie.index', $id)->with('statut', 'Votre categorie de prduit a été bien mise à jour !');
         
        }

      public function destroy($id)
      {   
       $idcat = $id;
        $delproduits = Produit::where('category_id',''.$id.'')
              ->paginate(20)
              ->setPath('');
          return view('backCategorie.delproduit', compact('delproduits','idcat')); 

        
     
          //Categorie::where('id', $id)->delete($id);
          //return redirect()->route('categorie.delproduit', $id)->withDel("statut : Une ligne a été Supprimée !");    
      }

      


      public function delproduits(Request $request)
      {  

  
       // $produit = produit::all();

        
           echo $request->del; 
           
          
           
            Produit::where('category_id', $request->del)->delete($request->del);
            Categorie::where('id', $request->del)->delete($request->del);
          return redirect()->route('categorie.index', $request->del)->withDel("statut : Une ligne a été Supprimée !");    
      }

        /*public function categorieSearch(SearchcRequest $request)
        {
            $cat = $request->input('libele');
            $r_categorie = Categorie::where('libele',''.$cat.'')->get();
            return view('backCategorie.search_c', compact('r_categorie'));

        }*/

  

}
