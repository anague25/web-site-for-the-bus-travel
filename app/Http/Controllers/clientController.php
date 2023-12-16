<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Client;
use App\Models\Numerodeticket;
use App\Models\Siege;
use App\Models\Ticket;
use Illuminate\Support\Facades\Session;
use HTTP_Request2;
use Symfony\Component\HttpKernel\Exception\HttpException;

class clientController extends Controller
{
    public function traitementdemandeclient(Request $request){
        $request->validate([
            'date'=>'required',
            'nbrclient'=>'required',
            'depart'=>'required',
            'destination'=>'required',
        ]);
        $nbrclient = $request->nbrclient;
        $depart = $request->depart;
        $destination = $request->destination;
        $date = $request->date;        
       $data = Bus::where([["lieudedepart","=","$depart"] , ["destination","=","$destination"] , ["jour","=","$date"]])->get();

        return view('clientlistbus',compact('data','nbrclient'));
    }



    public function infoclient(Bus $idbus,$nbrclient){

        $siege = Siege::where("matriculedubus","$idbus->matricule")->orderBy('id','asc')->get();
        $tabticket = Numerodeticket::all();
        $tab = array();
        foreach($tabticket as $item){
            $tab[]=$item->numeroduticket;
        }
        $rand = rand();
       
       while(in_array($rand,$tab)){
            $rand = rand();
       }
      
        // $nt = rand();


       
        return view('infoclient',compact("idbus","nbrclient","siege","rand"));
    }


    public function traitementinfoclient(Request $request,Bus $idbus,$nbrclient){

        $request->validate([
            "nometprenom"=>"required",
            "numeroduticket"=>"required",
            "tel1"=>"required",
            "siege"=>"required"

        ]);

$nombredeplacechoisir = count($request->siege);
$restedeplace = $idbus->restedeplace;

if($nombredeplacechoisir <= $restedeplace){
    if($nombredeplacechoisir == $nbrclient){
       
        

        // debut de procedure d'insertion
  // if($idbus->retedeplace)


        // $t = $request->siege; 
        // echo $request->siege[0];
        // print_r($t);
        // exit();
        $arrayToString = implode(",",$request->siege);
       $datasiege = Siege::where("numerodusiege",$arrayToString)->where("matriculedubus",$idbus->matricule)->where("statusdusiege","occupe")->get();
       $nbrelementsiege = collect($datasiege)->count();
    //    echo $nbrelementsiege;
    //    dd($datasiege);
       if($nbrelementsiege == 0){

      


       
    // echo $response->getBody();

   
   

    
    


        $msg = Client::create([
            "nometprenom"=>$request->nometprenom,
            "numeroduticket"=>$request->numeroduticket,
            "matricule"=> $idbus->matricule,
            "numerodusiege"=>$arrayToString,
            "position"=>$idbus->positiondelagence,
            "destination"=>$idbus->destination,
            "numerodetelephone"=>$request->tel1
        ]);

        

        if($msg){

            // mise a jour du reste de place dans la table bus
            $miseajourdesplacesrestantes = --$restedeplace;
            Bus::where('id', $idbus->id)->update(['restedeplace'=>$miseajourdesplacesrestantes]);
            $status = "occupe";
            Siege::where([ ['numerodusiege',"=",$arrayToString],['matriculedubus',"=",$idbus->matricule] ])->update(['statusdusiege'=>$status]);




            $msg1 = Ticket::create([
                "nometprenom"=>$request->nometprenom,
                "numeroduticket"=>$request->numeroduticket,
                "matricule"=> $idbus->matricule,
                "numerodusiege"=>$arrayToString,
                "depart"=>$idbus->lieudedepart,
                "destination"=>$idbus->destination,
                "numerodetelephone"=>$request->tel1,
                "nombredesiege"=>$nbrclient,
                "prix"=>$idbus->prixdusiege,
                "nomdelagence"=>$idbus->nomdelagence,
                "date"=>$idbus->jour
            ]);
            if($msg1){

                $msg2 = Numerodeticket::create([
                    "numeroduticket"=>$request->numeroduticket
                ]);

                if($msg2){
                    $valTicket = Ticket::where("numeroduticket","=","$request->numeroduticket")->get();
                   
                    $idmat = $valTicket[0]->id;
                   
                    $request->session()->put('idnum',$idmat);
                    return back()->with("successclient","passage enregistre avec succe");

                }else{
                    return back()->with("ehecclient","une erreur c'est produit");
    
                }

            }else{
                return back()->with("ehecclient","une erreur c'est produit");
            }


        }else{
            return back()->with("ehecclient","une erreur c'est produit");
        }


    




  



// endstatus












          
        
        
      

















      

        // ======== fin api de payment ===========
       

// fin de procedure d'insertion
        }else{
            return back()->with("echecclient","desole ces places ne sont plus disponible!!!");
        }

    }else{
        return back()->with("echecclient","Attention, le nombre de place choisir doit etre egale au nombre de passage");
    }
}else{
    return back()->with("echecclient","S'il vous plait veuillez cherchez un autre bus car plus aucune place n'est disponible dans ce bus!!!");
}



     
      


    }






  //   public function monapi(){

  //       // $tab = ['mon'=>'roosvelt','manger'=>'erudormit'];
  //       // return $tab;
         
  //        // require_once 'HTTP/Request2.php';
  //         $request2 = new HTTP_Request2();
  //         $request2->setUrl('https://demo.campay.net/api/collect/');
  //         $request2->setMethod(HTTP_Request2::METHOD_POST);
  //         $request2->setConfig(array(
  //           'follow_redirects' => TRUE
  //         ));
  //         $request2->setHeader(array(
  //           'Authorization' => 'Token eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsInVpZCI6MjM2OH0.eyJpYXQiOjE2OTQzMTMwMzAsIm5iZiI6MTY5NDMxMzAzMCwiZXhwIjoxNjk0MzE2NjMwfQ.yPezGp378B_6rokXLFAu3VGCvV_MjWjn4B91eOJe5qQ',
  //           'Content-Type' => 'application/json'
  //         ));
  //         $request2->setBody('{"amount":"5","from":"237653963875","description":"Test","external_reference": ""}');
  //         try {
  //           $response = $request2->send();
  //           if ($response->getStatus() == 200) {
  //           //  dd($response->getBody()) ;
  //            $tab =json_decode($response->getBody());
  //           $reference = $tab->reference;
            
             
  
  
  
  // // status
  // $request1 = new HTTP_Request2();
  // $request1->setUrl('https://demo.campay.net/api/transaction/'.$reference.'/');
  // $request1->setMethod(HTTP_Request2::METHOD_GET);
  // $request1->setConfig(array(
  //   'follow_redirects' => TRUE
  // ));
  // $request1->setHeader(array(
  //   'Authorization' => 'Token eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsInVpZCI6MjM2OH0.eyJpYXQiOjE2OTQzMTMwMzAsIm5iZiI6MTY5NDMxMzAzMCwiZXhwIjoxNjk0MzE2NjMwfQ.yPezGp378B_6rokXLFAu3VGCvV_MjWjn4B91eOJe5qQ',
  //   'Content-Type' => 'application/json'
  // ));
  // try {
  //   $response = $request1->send();
  //   if ($response->getStatus() == 200) {
  //     // echo $response->getBody();
  
  //     $tab1 =json_decode($response->getBody());
  //     $status = $tab1->status;
  //     while($status == "PENDING"){
  //       $response = $request1->send();
  //       $tab1 =json_decode($response->getBody());
  //       $status = $tab1->status;
  //     }
  
  //     if($status == "SUCCESSFUL"){
  //      return true;
  //     }
  
  
  
  
  //   }
  //   else {
  //     echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
  //     $response->getReasonPhrase();
  //   }
  // }
  // catch(HttpException $e) {
  //   echo 'Error: ' . $e->getMessage();
  // }
  
  
  // // endstatus
  
  
  
  
  
  
  
  
  
  
  
  
  //           }
  //           else {
  //             echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
  //             $response->getReasonPhrase();
  //           }
  //         }
  //         catch(HttpException $e) {
  //           echo 'Error: ' . $e->getMessage();
  //         }
  
  
  
  //         // return view('mtnapi');
  
  
         
  //     }
  




}
