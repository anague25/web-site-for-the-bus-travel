
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body class="bg-secondary">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gerer les etudiant</a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Etudiant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Switch account</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


<div class="container bg-white shadow profil p-4 " style="font-family: 'Times New Roman', Times, serif;font-weight:bold;border-radius:5px">

    <div class="img text-center pb-3 ">
      <div class="cadre border">
        @if (!empty($id->image))
        <img src="{{asset("uploads/image/$id->image")}}" alt="photo de profil" class="w-100  h-100">
        @else
        <img src="{{asset("uploads/image/icons8-user-100.png")}}" alt="photo de profil" class="w-100  h-100">
        @endif
       
      </div>
    </div>
    <div class="info row">
        <div class="col-4 offset-1 fs-5">
            <p class="">nom et prenom</p>
            <p class="text-secondary">{{$id->nom}} {{$id->prenom}}</p>
            <p class="">addresse email</p>
            <p class="text-secondary">{{$id->email}}</p>


          <div >
            <a href="{{route('modifierclient',[$id->id])}}" class="btn btn-primary">Modifier Mon Profil</a>
          </div>
            <div>

            </div>
        </div>
        <div class="col-4 offset-2 fs-5 ps-4">
            <p>date de naissance</p>
            <p class="text-secondary">{{$id->datedenaissance}}</p>
            <p>Telephone</p>
            <p class="text-secondary">{{$id->tel}}</p>

            <div>
              <a href="{{route('deconnexion')}}" class="btn btn-danger">Se Deconnecter</a>
            </div>
        </div>

    </div>

   

   

</div>








<style>
  .info{
    
  }
  

.imguser{
    overflow: hidden;
    border-radius: 50%;
    border: 3px solid magenta;
    width: 100px;
    height: 100px;
}

.cadre{
  width: 250px;
  height: 250px;
  border-radius: 50%;
  overflow: hidden;

 margin: auto;
 
}

.profil{
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left:50%;
  width: 600px
}

</style>






  </body>
</html>