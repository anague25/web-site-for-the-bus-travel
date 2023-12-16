<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
   
    public function generer_token_string($length = 20){
        $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPKRSTUVWXYZ";
        $token="";
        for($i=0;$i<$length;$i++){
            $token.=$str[rand(0,strlen($str)-1)];  
        }
    
        return $token;
    
    }


    public function verification($email,$token){
       $data =  User::where("email",$email)->where("token",$token)->get();
    // $data = User::all();
        $nombre = collect($data)->count();
        // echo $nombre;
        // dd($data);
        if($nombre == 1){
             User::where('id', $data[0]->id)->update(['email' =>$email,'validation'=>1,'token'=>'valide']);
                $success = "l'adresse email a bien ete confirme, vous pouvez a nouveau essayer de vous connectez,Merci!";
        }

      

        return view('verification',compact('email','token','success'));
    }
   
   
   
   
    public function inscription(){
        return view('inscription');
    }





    public function traitementinscription(Request $request){
        
            $request->validate([
                'nom'=>'required',
                'prenom'=>'required',
                'date'=>'required',
                'email'=>'required|email|unique:users',
                'sexe'=>'required',
                'tel'=>'required',
                'password'=>'required|min:5|max:12',
                'password2'=>'required|same:password'
                
            ]);

            
    
        //  $msg =  User::create($request->all());
            $user = new User();

            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->sexe = $request->sexe;
            $user->datedenaissance = $request->date;
            $user->tel = $request->tel;
            $user->email = $request->email;
            $user->status = '0';
            $user->password = Hash::make($request->password);
            $user->confirm_password =Hash::make($request->password2);
        
       
          
            if($request->hasfile('image')){
                $file = $request->image;
                $file->extension();
                $extension = $file->extension();
                $filename = time().'.'.$extension;
                $file->move("uploads/image/",$filename);
                $user->image = $filename;

            }else{
            //   return $request;
                $user->image = "";
            }

            //email

            $token = $this->generer_token_string(20);

            $mail_data = [
                "recipient"=>$request->email,
                "fromEmail"=>"anaguesonnaroosvelt@gmail.com",
                "fromName"=>$request->nom,
                "token"=>$token
            ];



           \Mail::send('email',$mail_data,function($message) use ($mail_data){
                $message->to($mail_data["recipient"])
                        ->from($mail_data["fromEmail"],$mail_data["fromName"])
                        ->subject("Confirmation d'email");
            });

       
            


            // end email


            // die();
            $user->token = $token;
          $msg = $user->save();

         if($msg){
            return back()->with('success',"utiliisateur enregistrer avec success, un email de confirmation vous a ete envoye <br> veuillez consulter votre messagerie");
         }else{
            return back()->with('erreur','une erreur est survenue');
         }

         


   
    }


    // public function isOnline($site = "https://youtube.com/"){
    //     if(fopen($site,'r')){
    //         return true;
    //     }else{
    //         return false;
    //     }
    //  }









    public function connexion(){

        return view('connexion');
    }


    public function traitementconnexion(Request $request){

        $request->validate([
           
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
            
        ]);


       


        $user = User::where("email","=","$request->email")->where("status","=","0")->first();
// dd($user);
        if($user){
           if(Hash::check($request->password,$user->password)){
                if($user->validation == 1){
                    $request->session()->put('loginId',$user->id);
                    return redirect('busclient');
                }else{
                    $token = $this->generer_token_string(20);
                     User::where('id', $user->id)->update(['token'=>$token]);

                    $mail_data = [
                        "recipient"=>$request->email,
                        "fromEmail"=> "anaguesonnaroosvelt@gmail.com",
                        "fromName"=>$user->nom,
                        "token"=>$token
                    ];
        
        
        
                    \Mail::send('email',$mail_data,function($message) use ($mail_data){
                        $message->to($mail_data["recipient"])
                                ->from($mail_data["fromEmail"],$mail_data["fromName"])
                                ->subject("Confirmation d'email");
                    });


                    return back()->with('success','votre adresse email n\'est pas confirmez, un email de confirmation 
                    vous a ete envoyer, veuillez consulter votre messagerie ');
                }
           }else{
            return back()->with('erreur','Mot de passe invalide');
           }
        }else{
            return back()->with('erreur','Email invalide');
        }
        

    }


    public function deconnexion(){
       /* if(Session::has('numeroduticket')){
            Session::pull('numeroduticket');
        }*/

        if(Session::has('loginId')){
            Session::pull('loginId');
            Session::pull('idnum');
            
            return redirect('connexion');
        }
       

    }

    public function hotels()
    {
        return view('hotels');
    }
    


    public function busclient()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where("id","=",Session::get('loginId'))->first();
        }
        return view('busclient', ['data'=> $data]); 
    }

    


    public function agence(){

        return view('formAgence');
    }

    public function agenceConnexion(){

        return view('formConnexionAgence');
    }
    


    public function traitementagence(Request $request){

        $request->validate([
            'nom'=>'required',
            'email'=>'required|email|unique:users',
            'tel'=>'required',
            'password'=>'required|min:5|max:12',
            'password2'=>'required|same:password'
        ]);

    //  $msg =  User::create($request->all());
        $user = new User();

        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->status = '1';
        $user->password =Hash::make($request->password);
        $user->confirm_password =Hash::make($request->password2) ;

        if($request->hasfile('image')){
            $file = $request->image;
            $file->extension();
            $extension = $file->extension();
            $filename = time().'.'.$extension;
            $file->move("uploads/image/",$filename);
            $user->image = $filename;

        }else{
        //   return $request;
            $user->image = "";
        }


  //email

  $token = $this->generer_token_string(20);

  $mail_data = [
      "recipient"=>$request->email,
      "fromEmail"=>"anaguesonnaroosvelt@gmail.com",
      "fromName"=>$request->nom,
      "token"=>$token
  ];



 \Mail::send('email',$mail_data,function($message) use ($mail_data){
      $message->to($mail_data["recipient"])
              ->from($mail_data["fromEmail"],$mail_data["fromName"])
              ->subject("Confirmation d'email");
  });


  


  // end email


  // die();
  $user->token = $token;





      $msg = $user->save();

     if($msg){
        return back()->with('successAdmin','Administrateur enregistrer avec success, un email de confirmation vous a ete envoye  veuillez consulter votre messagerie');
     }else{
        return back()->with('erreurAdmin','une erreur est survenue');
     }

     $request->session()->put('insAdmin','ok');
    }

public function choixAdmin(){
    return view('choixAdmin');
}


    public function traitementconnexionAgence(Request $request){

        $request->validate([
           
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
            
        ]);

        $user = User::where("email","=","$request->email")->where("status","=","1")->first();

        if($user){
           if(Hash::check($request->password,$user->password)){
                if($user->validation == 1){
                    $request->session()->put('loginIdAdmin',$user->id);
                    return redirect('admin');
                }else{



                    $token = $this->generer_token_string(20);
                     User::where('id', $user->id)->update(['token'=>$token]);

                    $mail_data = [
                        "recipient"=>$request->email,
                        "fromEmail"=>"anaguesonnaroosvelt@gmail.com",
                        "fromName"=>$user->nom,
                        "token"=>$token
                    ];
        
        
        
                    \Mail::send('email',$mail_data,function($message) use ($mail_data){
                        $message->to($mail_data["recipient"])
                                ->from($mail_data["fromEmail"],$mail_data["fromName"])
                                ->subject("Confirmation d'email");
                    });


                    return back()->with('success','votre adresse email n\'est pas confirmez, un email de confirmation 
                    vous a ete envoyer, veuillez consulter votre messagerie ');



                }
               
           }else{
            return back()->with('erreur','Mot de passe invalide');
           }
        }else{
            return back()->with('erreur','Email invalide');
        }
        

    }




// mise a jour des infos


public function traitementmodifierclient(Request $request,User $id){

    if($request->hasfile('image')){
        $file = $request->image;
        $file->extension();
        $extension = $file->extension();
        $filename = time().'.'.$extension;
        $file->move("uploads/image/",$filename);
        User::where('id', $id->id)->update(['image'=>$filename]);

       

    }else{
    //   return $request;
    User::where('id', $id->id)->update(['image'=>""]);
    }








    $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'date'=>'required',
        'email'=>'required|email',
        'sexe'=>'required',
        'tel'=>'required',
        'password'=>'required|min:5|max:12',
        'password2'=>'required|same:password'
        
    ]);


   $msg = $id->update([
            $id->nom = $request->nom,
            $id->prenom = $request->prenom,
            $id->sexe = $request->sexe,
            $id->datedenaissance = $request->date,
            $id->tel = $request->tel,
            $id->email = $request->email,
            $id->password = Hash::make($request->password),
            $id->confirm_password =Hash::make($request->password2)

    ]);


    if($msg){
        return back()->with('success','vos informations ont ete modifier avec success');
    }else{
        return back()->with('erreur','une erreur est survenue...');
    }


}


public function traitementmodifieradmin(Request $request,User $id){

    if($request->hasfile('image')){
        $file = $request->image;
        $file->extension();
        $extension = $file->extension();
        $filename = time().'.'.$extension;
        $file->move("uploads/image/",$filename);
        User::where('id', $id->id)->update(['image'=>$filename]);

       

    }else{
    //   return $request;
    User::where('id', $id->id)->update(['image'=>""]);
    }


    $request->validate([
        'nom'=>'required',
        'email'=>'required|email|unique:users',
        'tel'=>'required',
        'password'=>'required|min:5|max:12',
        'password2'=>'required|same:password'
    ]);

   $msg = $id->update([
        $id->nom = $request->nom,
        $id->tel = $request->tel,
        $id->email = $request->email,
        $id->password =Hash::make($request->password),
        $id->confirm_password =Hash::make($request->password2)

    ]);


    if($msg){
        return back()->with('successadmin','vos informations ont ete modifier avec success');
    }else{
        return back()->with('erreuradmin','une erreur est survenue...');
    }
}



public function modifierclient(User $id){
    return view('updatecient',['id'=>$id]);
}

public function modifieradmin(User $id){
    return view('updateadmin',['id'=>$id]);
}


// end mise a jour









    
    public function Administration(){

        $dataAdmin = array();
        if(Session::has('loginIdAdmin'))
        {

            $dataAdmin = User::where("id","=",Session::get('loginIdAdmin'))->first();
            $dataAdmin2 = User::where("status","=","0")->get();
            $dataAdmin3 = User::all();
            $data = array();
            if(Session::has('loginIdAdmin'))
            {
                $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
            }

        }
       
        return view('layouts.index',['dataAdmin'=> $dataAdmin,'dataAdmin2'=> $dataAdmin2,'dataAdmin3'=> $dataAdmin3,'data'=>$data]);
    }



    public function deconnexionAdmin(){

       
        if(Session::has('loginIdAdmin'))
        {
            Session::pull('loginIdAdmin');
            return view('agenceConnexion');
        }
       
       
    }


    public function voirmonprofil(User $id){
        return view('voirmonprofil',compact('id'));
    }
   


}
