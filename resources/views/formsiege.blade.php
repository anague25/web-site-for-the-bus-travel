@extends('layouts.communadmin')
@section('content')
<main class="container mt-4 bg-white p-3">
    

    
{{-- formulaire --}}

<form method="post" class="text-uppercase" action="{{route('traitementformsiege')}}">
    @csrf

    @if (session()->has('success'))
       <div class="alert alert-success text-center">
        <h3>
          {{  session()->get('success')}}
        </h3>
        </div> 
    @endif

    @if (session()->has('erreur'))
       <div class="alert alert-danger text-center">
        <h1>
          {{  session()->get('erreur')}}
        </h1>
        </div> 
    @endif

    <div class="mb-3">
        <label for="formFile" class="form-label">nombre total de sieges</label>
        <input type="number" class="form-control" id="formFile" name="nombredesiege" placeholder="entrez le nombre de sieges du bus" value="{{$idbus->totaldeplacedubus}}">
        <span class="text-danger">
            @error('nombredesiege')
                {{$message}}
            @enderror
        </span>
      </div>


      <div class="mb-3">
        <label for="lettre" class="form-label"> lettre de numero de siege</label>
        <input type="text" class="form-control"  id="lettre" name="lettre" value="A"  placeholder="lettre associe au numero du siege">
        <span class="text-danger">
            @error('lettre')
                {{$message}}
            @enderror
        </span>
      </div>
      

      <div class="mb-3">
        <label for="status" class="form-label">Le status par default du siege :</label>
        <input type="text" class="form-control"  id="status" name="status" value="libre">
        <span class="text-danger">
            @error('status')
                {{$message}}
            @enderror
        </span>
      </div>
      
      <div class="mb-3">
        <label for="nom" class="form-label">nom de l'agece :</label>
        <input type="text" class="form-control"  id="nom" name="nom" placeholder="entrez le nom de l'agence" value="{{$idbus->nomdelagence}}">
        <span class="text-danger">
            @error('nom')
                {{$message}}
            @enderror
        </span>
      </div>

      <div class="mb-3">
        <label for="matricule" class="form-label">matricule du bus</label>
        <input type="text" class="form-control"  id="matricule" name="matricule" placeholder="matricule du bus" value="{{$idbus->matricule}}">
        <span class="text-danger">
            @error('matricule')
                {{$message}}
            @enderror
        </span>
      </div>

      <button type="submit" class="btn btn-primary me-2">valider</button>
      
</form>



</main>    
@endsection
