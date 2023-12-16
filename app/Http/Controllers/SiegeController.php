<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\User;
use App\Models\Siege;
use Illuminate\Support\Facades\Session;


class SiegeController extends Controller
{
    public function definirdessieges(){
        $liste = Bus::orderBy("id","desc")->paginate(4);
        $liste_nbr = Bus::all();

        $data = array();
        if(Session::has('loginIdAdmin'))
        {
            $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
        }

        return view('listeBusSiege',['liste'=>$liste,'liste_nbr'=>$liste_nbr,'data'=>$data]);
    }


    public function attributSiege(Bus $idbus){

        $data = array();
        if(Session::has('loginIdAdmin'))
        {
            $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
        }

        return view('formSiege',compact('idbus','data'));
    }

    public function traitementformsiege(Request $request){
    for($i=0;$i<$request->nombredesiege;$i++){
        $n=$i+1;
        $request->validate([
            'nombredesiege'=>'required',
            'lettre'=>'required',
            'status'=>'nullable',
            'nom'=>'required',
            'matricule'=>'required'
        ]);

       
         
    $msg = Siege::create([
            "numeroduticket" => '0',
            "nombredesiege" => $request->nombredesiege, 
            "numerodusiege" => $request->lettre.$n,
            "statusdusiege" => $request->status,
            "nomdelagence" => $request->nom,
            "matriculedubus" => $request->matricule
            ]);


            // $msg = $siege->save();

       
    }

    if($msg){
        return back()->with('success','siege enregistrer avec success');
     }else{
        return back()->with('erreur','une erreur est survenue');
     }
    }



    public function managmentlistbus(){

        return view('gererSiege');
    }

    public function listsiege($mat){
       $liste = Siege::where("matriculedubus","=","$mat")->paginate(4) ;
       $liste_nbr = Siege::where("matriculedubus","=","$mat")->get();

       $data = array();
       if(Session::has('loginIdAdmin'))
       {
           $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
       }
       
        return view('listSiege',['liste'=>$liste,'liste_nbr'=>$liste_nbr,'data'=>$data]);
    }



    public function allsiegedelete($mat){


        $liste = Siege::where("matriculedubus","=","$mat")->get();
        foreach($liste as $s){
          $id = $s->id;
         $del = Siege::find($id);
       $msg = $del->delete();
        }

        if($msg){
            return back()->with('successdeleteall','tous les sieges ont ete supprimes avec succe');
        }

        
     }
 






}
