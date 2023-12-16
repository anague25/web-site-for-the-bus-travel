@extends('layouts.communadmin')

@section('content')

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


  @if (session()->has('successdeleteall'))
  <div class="alert text-center alert-success mt-3">
   <h3>
     {{  session()->get('successdeleteall')}}
   </h3>
   </div> 
@endif


  @if (count($liste_nbr) !== 0)

        <div class="wrapper row ">
        <h1 class="pt-3 text-success text-center font-weight-bold mt-3"><i class="fa-sharp fa-solid fa-list"></i> Listes Des Sieges Du Bus Au Matricule : <span class="text-white text-uppercase bg-dark p-2 rounded">{{$liste[0]->matriculedubus}}</span></h1>


        <div class="table-responsive mt-4">
          <div class="d-flex  justify-content-between">
            <div class="">
          <span class="h3 sm-mt-1 sm-ms-1 text-success"> Vos Sieges </span>
          </div>
          <div class="">
          <span class="fs-6 sm-mt-1 sm-me-1 badge rounded-pill  bg-primary"> total de siege : {{count($liste_nbr) }} </span>
          </div>
          </div> 

          @if (session()->has('successdeleteall'))
          <div class="alert text-center alert-success">
          <h3>
            {{  session()->get('successdeleteall')}}
          </h3>
          </div> 
      @endif

      
          <table class="table table-dark table-striped table-hover">
              <thead>
              <tr class="text-center">
                <th scope="col">nombre d'element</th>
                <th scope="col">ID(identifiant du bus)</th>
                <th scope="col" >staus</th>
                <th scope="col">numero du siege</th>
                <th scope="col">nom de l'agence</th>
                <th scope="col">matricule</th>

               
              </tr>
            </thead>

            <tbody>
              @foreach ($liste as $list)
                  <tr class="text-center align-middle">
                      <th scope="row">{{$loop->index+1 /*$loop->index+1 ou $loop->iteration*/}}</th>
                      <td >{{$list->id}}</td>
                      <td >{{$list->statusdusiege}}</td>
                      <td >{{$list->numerodusiege}}</td>
                      <td >{{$list->nomdelagence}}</td>
                      <td >{{$list->matriculedubus	}}</td> 
                    </tr>
                  
                    @endforeach
              </tbody>
          </table>
          <span class=""> {{ $liste->links() }} </span>
          <div class="btn-group">
            <button type="button" class="btn btn-danger">Suppression de tous les elements</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              {{-- <span class="visually-hidden">Toggle Dropdown</span> --}}
            </button>
            <ul class="dropdown-menu bg-danger ">
              <li><a class="dropdown-item text-white text-center bg-danger" href="#" onclick="if(confirm('voulez-vous vraiment supprimer toute la liste de bus?')){
                document.getElementById('form-delete').submit();
            }">Supprimer</a></li>
              <form id="form-delete" action="{{route('allsiegedelete',['mat'=>$liste[0]->matriculedubus])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="delete">
            </form>
            </ul>
          </div>
         
        </div>

@else{
    <div class="wrapper row ">
        <h1 class="pt-3 text-success text-center font-weight-bold mt-3"><i class="fa-sharp fa-solid fa-list"></i> Listes Des Sieges Du Bus</h1>
        <div class="alert alert-danger  mt-5">
            <p class="text-center text-uppercase text-danger fs-3" style="font-weight:600;">aucune liste de bus trouver</p>
        </div>
    </div>
}
@endif





   @endsection