@extends('layouts.communadmin')

@section('content')


<div class=" container ">
<h1 class="pt-3 text-success text-center font-weight-bold mt-3"><i class="fa-sharp fa-solid fa-plus"></i> Creer Des Sieges Passages</h1>
<h5 class="pt-3 text-success text-center font-weight-bold "> <i class="fa-sharp fa-solid fa-hand"></i> Donner A Chaque Bus Des Sieges </h1>



  @if (session()->has('successdeleteall'))
  <div class="alert text-center alert-success mt-3">
   <h3>
     {{  session()->get('successdeleteall')}}
   </h3>
   </div> 
@endif
  

@if (count($liste_nbr) !== 0)


        <div class="table-responsive mt-4">
          <div class="d-flex  justify-content-between">
            <div class="">
          <span class="h3 sm-mt-1 sm-ms-1 text-success"> Vos Sieges </span>
          </div>
          <div class="">
          <span class="fs-6 sm-mt-1 sm-me-1 badge rounded-pill  bg-primary">Nombre du total de bus : {{count($liste_nbr) }} </span>
          </div>
          </div> 

          @if (session()->has('successdelete'))
          <div class="alert text-center alert-success">
          <h3>
            {{  session()->get('successdelete')}}
          </h3>
          </div> 
      @endif

      
          <table class="table table-dark table-striped table-hover">
              <thead>
              <tr class="text-center">
                <th scope="col">nombre d'element</th>
                <th scope="col">ID(identifiant du bus)</th>
                <th scope="col">date de voyage</th>
                <th scope="col">nom de l'agence</th>
                <th scope="col">Depart</th>
                <th scope="col" >Destination</th>
                <th scope="col">Nombre de place</th>
                <th scope="col">prix du siege</th>
                <th scope="col">matricule du bus</th>
                <th scope="col">Emplacement de l'agence</th>
                <th scope="col" class="">Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($liste as $list)
                  <tr class="text-center align-middle">
                      <th scope="row">{{$loop->index+1 /*$loop->index+1 ou $loop->iteration*/}}</th>
                      <td >{{$list->id}}</td>
                      <td >{{$list->jour}}</td>
                      <td >{{$list->nomdelagence}}</td>
                      <td >{{$list->lieudedepart}}</td>
                      <td >{{$list->destination}}</td>
                      <td >{{$list->totaldeplacedubus}}</td>
                      <td >{{$list->prixdusiege}}</td>
                      <td >{{$list->positiondelagence}}</td>
                      <td >{{$list->matricule}}</td>
                      
                      <td scope="col" class="d-flex" >
                          <a href="{{route('formSiege',['idbus'=>$list->id])}}" class="btn btn-primary me-1 " style="font-size: 12px;">Creer des sieges</a>
                          <a href="{{route('listsiege',['mat'=>$list->matricule])}}" class="btn btn-success " style="font-size: 12px;">voir les sieges</a>
                      </td>
                    </tr>
                  
                    @endforeach
              </tbody>
          </table>
          <span class=""> {{ $liste->links() }} </span>
         
        </div>

@endif


<!-- partie css : style -->


<style>

th{
    font-size: 12px;
}

.boutton{
    font-size: 9px;
}

.wrapper{
 width: 95%;
 margin: 0 auto;
}

.image-profil-navbar{
   
   border-radius: 50%;
   width: 50px;
   height: 50px;
   
}


</style>


@endsection
 


