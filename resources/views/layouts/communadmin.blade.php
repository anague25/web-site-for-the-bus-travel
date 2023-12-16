

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="navbar.css">
   
  </head>

<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand" href="#">The Paradise Of Travel</a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
          </li>
         
         
        </ul>

        <ul>
            @if (!empty($data->image))
            <div>
            <a href="#" class="mb-2 imageprofil">
                 <img class="mx-1" src="{{asset("uploads/image/$data->image")}}" width="50px" height="50px" alt="">
            </a>
            <div class="row position-absolute bg-white mt-3 rounded profil shadow" style="z-index:1000;">
              <div class="col-4 w-100">
                <p class=" ">nom : {{$data->nom}}</p>
                <p>prenom : {{$data->prenom}}</p>
                <p>email : {{$data->email}}</p>
                <p ><a href="{{route('voirmonprofil',[$data->id])}}" class="btn btn-success">Voir mon profil</a></p>

              </div>

            </div>
          </div>
            @else
              <div>
                <a href="#" class="mb-2 imageprofil">
                    <img class="mx-1" src="{{asset("uploads/image/icons8-user-100.png")}}" width="50px" height="50px" alt="">
                </a>
                <div class="row position-absolute bg-white mt-3 rounded profil shadow" style="z-index:1000;">
                  <div class="col-4 w-100">
                    <p class=" ">nom : {{$data->nom}}</p>
                    <p>prenom : {{$data->prenom}}</p>
                    <p>email : {{$data->email}}</p>
                    <p class="ms-4"><a href="{{route('voirmonprofil',[$data->id])}}" class="btn btn-success" >Voir mon profil</a></p>
    
                  </div>
    
                </div>
              </div>
            @endif
        </ul>
        
       
      </div>
    </div>
  </nav>




@yield('content')






  <script src="navbar.js"></script>
  <script src="{{asset('js/profil.js')}}"></script>
</body>


</html>

  

