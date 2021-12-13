<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
//use App\Models\AdminManage;


class AdminManageController extends Controller
{
    public function index()
	{ 
	    $listUser = User::orderByDesc('id')
            ->paginate(4)
            ->setPath('');
        return view('manageuse.index', compact('listUser'));  
	}

    public function create(Request $request)
    { 

      return view('manageuse.create');

    }

	    public function store(Request $request)
        {    

            
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

      return redirect()->route('usermanage.index')->withUsecreat("Un utilisateur a été ajouté avec succes!"); 
        }

    	public function edit($id)
    	{        
            $user = User::where('id',''.$id.'')->find(''.$id.'');
            return view('manageuse.edit', compact('user'));
    	}

      public function update(Request $request, $id)
  {    

    /*********droit catégorie*******/
      if($request->consulte == 'on') {
            user::where('id',''.$id.'')->update([

              'consultCat' => 1,
           
            ]);
      } else { user::where('id',''.$id.'')->update([ 'consultCat' => null, ]); }


      if($request->edite == 'on') {
            user::where('id',''.$id.'')->update([

              'editeCat' => 1,
           
            ]);
        }  else { user::where('id',''.$id.'')->update([ 'editeCat' => null, ]); }


        if($request->del == 'on') {
            user::where('id',''.$id.'')->update([

              'delCat' => 1,
           
            ]);
        } else { user::where('id',''.$id.'')->update([ 'delCat' => null, ]); }
       
         /*********droit produit**********/    
        
        if($request->consulteprd == 'on') {
            user::where('id',''.$id.'')->update([

              'consultPrd' => 1,
           
            ]);
      } else { user::where('id',''.$id.'')->update([ 'consultPrd' => null, ]); }


      if($request->editeprd == 'on') {
            user::where('id',''.$id.'')->update([

              'editePrd' => 1,
           
            ]);
        }  else { user::where('id',''.$id.'')->update([ 'editePrd' => null, ]); }


        if($request->delprd == 'on') {
            user::where('id',''.$id.'')->update([

              'delPrd' => 1,
           
            ]);
        } else { user::where('id',''.$id.'')->update([ 'delPrd' => null, ]); }
       

        return redirect()->route('usermanage.index')->withPf(" Des droits ont été acodés à l'utilisateur!"); 
  }

           

}
