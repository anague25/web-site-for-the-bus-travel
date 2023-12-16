<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BusController extends Controller
{


    public function addbus()
    {
        $data = array();
        if(Session::has('loginIdAdmin'))
        {
            $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
        }
        return view('ajouterunbus',['data'=>$data]);
    }


    public function traitementaddbus(Request $request){
        $request->validate([
            'jour_du_voyage'=>'required',
            'nom_de_lagence'=>'required',
            'destination'=>'required',
            'prix_pour_un_siege'=>'required',
            'nombre_de_place_du_bus'=>'required',
            'matricule'=>'required',
            'lieu_du_depart'=>'required',
            'position'=>'required'
        ]);

        $bus = new Bus();
        $bus->jour = $request->jour_du_voyage; 
        $bus->nomdelagence = $request->nom_de_lagence ;
        $bus->destination = $request->destination ;
        $bus->prixdusiege = $request->prix_pour_un_siege; 
        $bus->totaldeplacedubus = $request->nombre_de_place_du_bus; 
        $bus->restedeplace = $request->nombre_de_place_du_bus;
        $bus->matricule = $request->matricule ;
        $bus->lieudedepart = $request->lieu_du_depart; 
        $bus->positiondelagence = $request->position ;
        $msg = $bus->save();

        if($msg){
            return back()->with('success','Bus enregistrer avec succe');
         }else{
            return back()->with('erreur','une erreur est survenue');
         }

    }


   
    public function listedesbus(Request $request){
        $liste = Bus::orderBy("id","desc")->paginate(4);
        $liste_nbr = Bus::all();

        $data = array();
        if(Session::has('loginIdAdmin'))
        {
            $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
        }
       
        return view('listedesbus',['liste'=>$liste,'liste_nbr'=>$liste_nbr,'data'=> $data]);
    }

    public function editBus(Bus $bus){

        $data = array();
        if(Session::has('loginIdAdmin'))
        {
            $data = User::where("id","=",Session::get('loginIdAdmin'))->first();
        }
       
       return view('editbus',compact('bus','data'));

    }

    public function updatebus(Request $request, Bus $bus){

        $request->validate([
            'jour_du_voyage'=>'required',
            'nom_de_lagence'=>'required',
            'destination'=>'required',
            'prix_pour_un_siege'=>'required',
            'nombre_de_place_du_bus'=>'required',
            'matricule'=>'required',
            'lieu_du_depart'=>'required',
            'position'=>'required'
        ]);

        $msg = $bus->update([
            "jour" => $request->jour_du_voyage, 
            "nomdelagence" => $request->nom_de_lagence ,
            "destination" => $request->destination ,
            "prixdusiege" => $request->prix_pour_un_siege, 
            "totaldeplacedubus" => $request->nombre_de_place_du_bus, 
            "matricule" => $request->matricule,
            "lieudedepart" => $request->lieu_du_depart, 
            "positiondelagence" => $request->position,
            "restedeplace" => $request->nombre_de_place_du_bus

        ]);
        

        if($msg){
            return back()->with('success','Bus Modifier avec succe');
         }else{
            return back()->with('erreur','une erreur est survenue');
         }
       
        
 
     }




    public function deletebus(Bus $bus){
        $bus->delete();
        return back()->with('successdelete','Bus supprimer avec succe');
    }
    

    public function deleteallbus(){
        $bus = Bus::all();
        foreach($bus as $b){
          $id = $b->id;
         $del = Bus::find($id);
         $del->delete();
        }
        
        return back()->with('successdeleteall','tous les bus ont ete supprimes avec succe');
    }






}
