<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProduitFormRequest;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\User;
use App\Http\Requests\ProduitUpdateRequest;
use App\Http\Requests\SearchpRequest;
use Image;

class ProduitController extends Controller
{ /*comment*/

	public function index()
	{ 
	    $listProduits = Produit::orderByDesc('id')
            ->where('user_id',''.Auth::user()->id.'')
            ->paginate(4)
            ->setPath('');
        return view('backProduit.index', compact('listProduits'));  
	}

	  public function create()
    {
        $categories = categorie::all();
        return view('backProduit.create', compact('categories'));
    }

	   public function store(ProduitFormRequest $request)
    {
        $image='1';
        $image += Produit::orderByDesc('id')->first()->id;
    
	   // $idau=Auth::user()->id;
        $imageName=null;
        if ($request->file('image'))
        {
            $extension =  $request->file('image')->getClientOriginalExtension();
            $imageName =   $image. '.' . $extension;
            $request->file('image')->move('img', $imageName);
            $imagePath = public_path() . '/img/' . $imageName;
            $image_resize = Image::make($imagePath);
            $image_resize->resize(324,324);
            $image_resize->save(public_path('/img/'. $imageName));
        }

        $produit = Produit::create([
            'designation' => $request->designation,
            'prix' => $request->prix,
            'category_id' => $request->category_id,
            'quantite' => $request->quantite,
            'description' => $request->description,
            'image' => $imageName,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('produits.index', $produit)->withOk(" "  .$produit->designation. " a été bien ajouté à la liste de vos produits!");
    }

   

        public function show(Produit $produit)
        {
            
            return view('backProduit.show', ['produit' => $produit]);

        }

          public function favories(Request $request)
        {
            $request->prdidh;
             $request->debut_favorie;
              $request->fin_favorie;
            Produit::where('id', $request->prdidh)->update([

                'dt_debut_favorie' => $request->debut_favorie,
                'dt_fin_favorie' => $request->fin_favorie,
    
            ]);

           return redirect()->route('produits.show', $request->prdidh)->withFav("statut "  .$request->prdnameh. " a été bien ajouté aux favories !");
        }

    	public function edit(Produit $produit)
    	{
            $categories = categorie::all();
            return view('backProduit.edit', compact('categories', 'produit'));
    	}

        //ProduitUpdate
    	public function update(ProduitUpdateRequest $request, $id)
    	{


           if ($request->file('image'))
            {
                $extension =  $request->file('image')->getClientOriginalExtension();
                $imageName =   $id. '.' . $extension;
                $request->file('image')->move('img', $imageName);

                $imagePath = public_path() . '/img/' . $imageName;
                $image_resize = Image::make($imagePath);
                $image_resize->resize(324,324);
                $image_resize->save(public_path('/img/'. $imageName));
            
                 $produit = $request->designation;
                Produit::where('id', $id)->update([
              
                'image' => $imageName,
                  ]);
            }


                $produit = $request->designation;
                Produit::where('id', $id)->update([
                'designation' => $request->designation,
                'prix' => $request->prix,
                'category_id' => $request->category_id,
                'quantite' => $request->quantite,
                'description' => $request->description, 
            ]);
               
            

        return redirect()->route('produits.edit', $id)->withMo("statut "  .$produit. " a été bien modifié !");
       
      }

    	public function destroy($id)
    	{

            Produit::where('id', $id)->delete($id);
    	   return redirect()->route('produits.index', $id)->withDel("statut : Une ligne a été Supprimée !");
       
    	}

        public function produitSearch(SearchpRequest $request)
        {
            $prd = $request->input('designation');
            $r_produit = Produit::where('designation',''.$prd.'')->get();
            return view('backProduit.search_p', compact('r_produit'));
        }

           public function ajoutimg2(Request $request)
        {
           
            if ($request->file('image2')) 
            {
                 $produit=$request->designation;
                $imagena=$request->file('image2')->getClientOriginalName();
                   
                $extension =  $request->file('image2')->getClientOriginalExtension();
                $imageName =   $request->ajoutprodimg2.'2'. '.' . $extension;

                $request->file('image2')->move('img', $imageName);

                $imagePath = public_path() . '/img/' . $imageName;
                $image_resize = Image::make($imagePath);
                $image_resize->resize(324,324);
                $image_resize->save(public_path('/img/'. $imageName));
            
           
            Produit::where('id', $request->ajoutprodimg2)->update([

             'img2' => $imageName,
    
            ]);

            } 


        return redirect()->route('produits.edit', $request->ajoutprodimg2)->withAdimg("Un sous image de "  .$produit. " a été ajouté !");
        }

          public function ajoutimg3(Request $request)
        {
             
            if ($request->file('image3')) 
            {
                  $produit=$request->designation;
                $imagena=$request->file('image3')->getClientOriginalName();
                   
                $extension =  $request->file('image3')->getClientOriginalExtension();
                $imageName =  $request->ajoutprodimg3.'3'. '.' . $extension;

                $request->file('image3')->move('img', $imageName);

                $imagePath = public_path() . '/img/' . $imageName;
                $image_resize = Image::make($imagePath);
                $image_resize->resize(324,324);
                $image_resize->save(public_path('/img/'. $imageName));
            
           
            Produit::where('id', $request->ajoutprodimg3)->update([

             'img3' => $imageName,
    
            ]);

            }


        return redirect()->route('produits.edit', $request->ajoutprodimg3)->withAdimg("Un sous image de "  .$produit. " a été ajouté !");
            
        }


}
