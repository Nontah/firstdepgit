<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Validation\Rules;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCode;

use App\Http\Requests\imageprofilRequest;
use App\Http\Requests\usenameFormRequest;
use App\Http\Requests\UppassFormRequest;
use App\Http\Requests\NewmailFormRequest;
//use Illuminate\Support\Number;

class UserController extends Controller
{

    public function updateprofilimage(imageprofilRequest $request)
    {

         if(Auth::user()!=null)
        { 
               
                $mail=Auth::user()->email;
                if ($request->file('image')) 
                {
                    $imagena=$request->file('image')->getClientOriginalName();
                   
                    $extension =  $request->file('image')->getClientOriginalExtension();
                   $imageName =   Auth::user()->id. '.' . $extension;
                 
                    $request->file('image')->move('imguser', $imageName);
                  

                    $imagePath = public_path() . '/imguser/' . $imageName;
                    $image_resize = Image::make($imagePath);
                    $image_resize->resize(32,32);
                    $image_resize->save(public_path('imguser/mim/'. $imageName));

                     $image_resize1 = Image::make($imagePath);
                   
                    $image_resize1->resize(250,250);
                    $image_resize1->save(public_path('imguser/'. $imageName));


                 User::where('email', $mail)->update([
                    'image' => $imageName,
                ]);
                session([ 'step1' => '1']);
                session([ 'step2' => '2']);
                session([ 'step3' => '3']);
                session([ 'step4' => '4']);

          

        } 

    }
      return redirect()->route('user.index')->withPf("Votre image de profil été mise à jour avec succes!");
}


    public function updateuseName(usenameFormRequest $request){

           if(Auth::user()!=null)
        { 
               
                $mail=Auth::user()->email;
                if ($request->name) 
                {

                     User::where('email', $mail)->update([
                    'name' => $request->name,
                    ]);

                    session([ 'step1' => '2']);
                    session([ 'step2' => '1']);
                    session([ 'step3' => '3']);
                    session([ 'step4' => '4']);

                }

        }
     return redirect()->route('user.index')->withNn("Votre Nom été mis à jour avec succes!");

    }

    public function updateusepass(UppassFormRequest $request)
    {   
        //$mail=Auth::user()->email;

        $password = Hash::make($request->password);

        $password_confirmation = Hash::make($request->password_confirmation);

         $r2 = Hash::check($request->password,  $password_confirmation);
       
         $userpass = User::where('email', Auth::user()->email)->find(''.Auth::user()->id.'');
      
        $result= $userpass->password;
        $r = Hash::check($request->passactuel,  $result);

            session([ 'step1' => '3']);
            session([ 'step2' => '2']);
            session([ 'step3' => '1']);
            session([ 'step4' => '4']);


        if ($r == true and $r2 == true) {

            User::where('email', Auth::user()->email)->update([
            'password' => Hash::make($request->password_confirmation),
           ]);

            return redirect()->route('user.index')->withPs("votre mot de passe été mis à jour avec succes!");
    }
           

     return redirect()->route('user.index')->withPser("votre mot de passe n'a pas été mis à jour avec succes!");
    }


	public function updateusnewemail(NewmailFormRequest $request)
    {
                    
                    $r=Auth::user()->id;
                    $scode=time()+($r * 24 * 60 * 60).''.$r.''.'1';
                    $r1 = substr($scode, -9, -1);
                    $mg = Str_shuffle($r1);
                    $c1 = substr($mg, 0, 4);
                    $c2 = substr($mg, 4, 4);
                     echo '<br>';
                    $scode = ''.$c1.'-'.$c2.'';
        
                       $to_name = 'TO_NAME';
                        $code=$scode;
                        $to_email = $request->email;
                        $data = array('name'=>"Sam Jose", "body" => "Test mail code");
                             
                        Mail::send('dashboard', $data, function($message) use ($to_name, $code, $to_email){
                            $message->to($to_email, $to_name)
                                    ->subject('Votre code est : '.$code.' ');
                            $message->from('f@gmail.com','Artisans Web');

                              session([ 'newadrmail' => $to_email]);
                        });  

                        User::where('email', $to_email)->update([
                             'emailcode' => Hash::make($code),
                        ]);


                        session([ 'step1' => '3']);
                        session([ 'step2' => '2']);
                        session([ 'step3' => '4']);
                        session([ 'step4' => '1']);

    return redirect()->route('user.index')->withEm("un code vous a été envoyé a votre adresse !");
    } 
    
    



    public function index()
    {
       	$user = Auth::user();
        return view('users.index', compact('user'));
       
    }


    public function show()
    {
        
      	$user = Auth::user();
        return view('users.index', compact('user'));

    }


     public function updateusemail(Request $request)
    {
            if(Auth::user()!=null) {

                $mail=Auth::user()->email;
        
                if ($request->code)
                { 

                    $newmail = session('newadrmail');
                 
                    //$code = User::where('email', $mail)->get();
                    $code = User::where('email', $mail)->find(''.Auth::user()->id.'');
      
                    /*foreach ($code as $usermail)
                        {
                       
                        }*/
                       $result = $code->emailcode;
                        echo $xx = Hash::check($request->code, $result);

              
                        if ($xx == true) {

                            User::where('email', $mail)->update([
                                'email' => $newmail,
                           ]);

                        }


                   } 
         }
        return redirect()->route('user.index')->withcode("statut : mise à jour réusie!");
    }


  

}
