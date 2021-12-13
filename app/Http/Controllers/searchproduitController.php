<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class searchproduitController extends Controller
{

		
		    public function __construct(){}

		    Public function livesearch(Request $request){

		    	// $term = Input::get('term');
		    	$produits='http://127.0.0.1:8000/produits';
		        $term = $request->get('term');
		        $data = DB::table('produits')->where("designation","LIKE","%$term%")->get();
		        foreach ($data as $result)
		        {
		            $results[] = ['value' => $result->designation, 'link' => ''.$produits.'/'.$result->id];
		        }
		        return response()->json($results);       
		    }




		    Public function livesearchCat(Request $request){

		    	// $term = Input::get('term');
		    	$categorie='http://127.0.0.1:8000/categorie';
		        $term = $request->get('term');
		        $data = DB::table('categories')->where("libele","LIKE","%$term%")->get();
		        foreach ($data as $result)
		        {
		            $results[] = ['value' => $result->libele, 'link' => ''.$categorie.'/'.$result->id];
		        }
		        return response()->json($results);       
		    }
			


		    Public function livesearchAccueil(Request $request){

		    	// $term = Input::get('term');
		    	$search='http://127.0.0.1:8000/search';
 				 $term = $request->get('term');
		        $data = DB::table('produits')->where("designation","LIKE","%$term%")->get();
		        foreach ($data as $result)
		        {
		          $results[] = ['value' => $result->designation, 'link' => ''.$search.'/'.$result->id];
		        }
		        return response()->json($results);          
		    }
}
