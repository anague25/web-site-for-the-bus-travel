@extends('layouts.communadmin')

@section('content')

<div class="wrapper  ">
<h1 class="pt-3 text-success text-center font-weight-bold mt-3"><i class="fa-solid fa-bars-progress p-1"></i> Listes Des Bus</h1>
<h5 class="pt-3 text-success text-center font-weight-bold "> <i  class="fa fa-trash"></i> Voir Les Details De Chaque Bus <i class="fa-sharp fa-solid fa-pen-to-square"></i></h1>



  @if (session()->has('successdeleteall'))
  <div class="alert text-center alert-success mt-3">
   <h3>
     {{  session()->get('successdeleteall')}}
   </h3>
   </div> 
@endif


@if (session()->has('successdelete'))
<div class="alert text-center alert-success">
<h3>
  {{  session()->get('successdelete')}}
</h3>
</div> 
@endif
  



@if (count($liste_nbr) !== 0)


        <div class="table-responsive mt-4">
          <div class="d-flex  justify-content-between">
            <div class="">
          <span class="h3 sm-mt-1 sm-ms-1 text-success"> Vos Bus </span>
          </div>
          <div class="">
          <span class="fs-6 sm-mt-1 sm-me-1 badge rounded-pill  bg-primary">Nombre du total de bus : {{count($liste_nbr) }} </span>
          </div>
          </div> 

         

      
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
                <th scope="col">Emplacement de l'agence</th>
                <th scope="col">matricule du bus</th>
                <th scope="col" class="">Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($liste as $list)
                  <tr class="text-center">
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
                      
                      <td scope="col" class="d-flex">
                          <a href="{{route('bus.edit',['bus'=>$list->id])}}" class="btn btn-success me-3">editer</a>
                              <a href="#" class="btn btn-danger" onclick="if(confirm('voulez-vous vraiment supprimer ce bus?')){
                                  document.getElementById('form-{{$list->id}}').submit()
                              }">supprimer</a>
                              <form id="form-{{$list->id}}" action="{{route('bus.supprimer',['bus'=>$list->id])}}" method="post">
                                  @csrf
                                  <input type="hidden" name="_method" value="delete">
                              </form>
                      </td>
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
              <form id="form-delete" action="{{route('allbusdelete')}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="delete">
            </form>
            </ul>
          </div>
        </div>

@endif
@endsection

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>


</html>

