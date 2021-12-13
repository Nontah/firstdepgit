<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;
use App\Http\Requests\SearchRequest;
use session;

class SearchController extends Controller
{





    public function show(Produit $search)
    {
        $categorie = Categorie::all();
         return view('searchresult', ['search' => $search], ['categorie' => $categorie]);

    }


		 /* public function postForm(SearchRequest $request)
        {
          	$prd = $request->input('designation');
            $search_produit = Produit::where('designation',''.$prd.'')->get();
           	return view('resultsearch', compact('search_produit'));
        }


	public function autocomplete(Request $request)
	{
		
		$data = Produit::select("designation")
						->where('designation','LIKE','%{ $request->query }%')
						->get();
		return response ()->json($data);					

		
			
	}*/

	/*public function index()
	{
		$users = $this->userRepository->getPaginate($this->nbrPerPage);
		$links = $users->setPath('')->render();
		
		return view('liste_utilisateur', compact('users', 'links'));
		
	}*


    public function show333(Categorie $search)
    {
      
    	     // $categorie = Categorie::where('id','1')->get();
    	        //echo $search;
     			return view('categorie_produit', ['search' => $search]);
     //  return redirect('search')->withOk("L'utilisateur " . $user->name . " a été créé.");
	
   
    }*/

    public function showcategorie(Request $request){
    	
    	$categories = Categorie::all();
    	$categorie = Produit::where('category_id',''.$request->id.'')
        ->paginate(4)
        ->setPath('showcategorie?id='.$request->id.'');

    	return view('showprodcategorie', compact('categorie','categories'));

    }

    public function trie(Request $request){

       
        $orderBy=$request->orderBy;
 
         $categorie = Produit::$orderBy('id')->paginate(4);
         $lien = $categorie->setPath('showcategorietriepdesc?orderBy='.$orderBy.'')->render();
         return view('showprodcategorietrie', compact('categorie', 'lien'));  
    }

    public function showcategorietriepdesc(Request $request){

    	//$orderBy=$_GET['orderBy'];
    		$orderBy=$request->orderBy;
    	/*$categorie = Produit::where('category_id',''.$id.'')->get();
    	return view('showprodcategorie', compact('categorie'));*/

    	$categorie = Produit::$orderBy('prix')->paginate(4);
	   $lien = $categorie->setPath('showcategorietriepdesc?orderBy='.$orderBy.'')->render();
        return view('showprodcategorietrie', compact('categorie', 'lien'));  
    }


	
    public function detailsproduit(Request $request)
    {
    	$request->id;
    	$produit = Produit::where('id',''.$request->id.'')->get();
    	return view('detailsprod', compact('produit'));
    }


}