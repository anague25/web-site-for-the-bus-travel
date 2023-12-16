
@extends('layouts.communadmin')

@section('content')

<!-- options de profil -->

<div class="jumbotron bg-light">
    <div class="container">
            <h1 class="text-primary text-success text-center font-weight-bold p-3 "> MODIFIER UN BUS DE VOYAGE </h1>    
            <form class="justify-content-center text-uppercase " method="POST"  action="{{route('traitementeditbus',['bus'=>$bus->id])}}">
            
                @csrf
                <input type="hidden" name="_method" value="put">

                @if (session()->has('success'))
                   <div class="alert alert-success text-center">
                    <h3>
                      {{  session()->get('success')}}
                    </h3>
                    </div> 
                @endif
            
                @if (session()->has('erreur'))
                   <div class="alert alert-danger">
                    <h1>
                      {{  session()->get('erreur')}}
                    </h1>
                    </div> 
                @endif

            <div class="form-group row mb-3">
                <label for="jour" class="col-sm-2 col-form-label">jour du voyage</label>

                <div class='col-sm-10'>
                   <input type="date" class="form-control" placeholder="jour" id="jour" name="jour_du_voyage" value="{{$bus->jour}}">
                   <span class="text-danger">
                    @error('jour_du_voyage')
                        {{$message}}
                    @enderror
                </span>
                </div>
            </div>

            
            <div class="form-group row mb-3">
                     <label for="nom" class="col-sm-2 col-form-label">nom de l'agence</label>
                <div class='col-sm-10'>
               
                        <input type="text" name="nom_de_lagence" class="form-control" id="nom" placeholder="nom" value="{{$bus->nomdelagence}}">
                        <span class="text-danger">
                            @error('nom_de_lagence')
                                {{$message}}
                            @enderror
                        </span>
                </div>
            </div>

            <div class="form-group row mb-3">
                        <label for="destination" class="col-sm-2 col-form-label">destination</label>
            <div class='col-sm-10'>
           
                        <input type="text" name="destination" class="form-control" id="destination" placeholder="destination" value="{{$bus->destination}}">
                        <span class="text-danger">
                            @error('destination')
                                {{$message}}
                            @enderror
                        </span>
                  </div>
            
            </div>

            <div class="form-group row mb-3">
            <label for="prix" class="col-sm-2 col-form-label">prix d'un siege</label>
                       
            <div class='col-sm-10'>
            <input type="number" name="prix_pour_un_siege" id="prix" class="form-control" placeholder="prix" value="{{$bus->prixdusiege}}">
            <span class="text-danger">
                @error('prix_pour_un_siege')
                    {{$message}}
                @enderror
            </span>
                </div>
            
            </div>

            <div class="form-group row mb-3">
                     <label for="nbr" class="col-sm-2 col-form-label">nombre de place du bus</label>
                        
                <div class='col-sm-10'>
                     <input type="number" name="nombre_de_place_du_bus" class="form-control" id="nbr" placeholder="nbr place" value="{{$bus->totaldeplacedubus}}">
                     <span class="text-danger">
                        @error('nombre_de_place_du_bus')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            
            </div>

                <div class="form-group row mb-3">
                        <label for="lieu" class="col-sm-2 col-form-label ">Lieu du depart</label>
                    <div class='col-sm-10'>
                        <input type="text" name="lieu_du_depart" class="form-control " id="lieu" placeholder="lieu" value="{{$bus->lieudedepart}}">
                        <span class="text-danger">
                            @error('lieu_du_depart')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
            
                </div>


                <div class="form-group row mb-3">
                        <label for="position" class="col-sm-2 col-form-label ">Emplacement de l'agence</label>
                    <div class='col-sm-10'>
                        <input type="text" name="position" class="form-control " id="position" placeholder="position de l'agence" value="{{$bus->positiondelagence}}">
                        <span class="text-danger">
                            @error('position')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
            
                </div>

                <div class="form-group row mb-3">
                        <label for="matricule" class="col-sm-2 col-form-label ">Matricule du bus</label>
                    <div class='col-sm-10'>
                        <input type="text" name="matricule" class="form-control " id="matricule" placeholder="matricule du bus" value="{{$bus->matricule}}">
                        <span class="text-danger">
                            @error('matricule')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
            
                </div>


                <div class="form-group row justify-content-center">
                        <button name="updatebus" class="col-sm-6 taille btn btn-success font-weight-bold ">Modifier</button>
                   
            
                </div>
                  
        </form>
    </div>
    </div>
    <br><br><br>
   
    
    @endsection

