

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>

  <!-- navbar -->
    <nav class="navbar navbar-expand-lg manavbar shadow w-100">
  <div class="container-fluid ">
    <a class="navbar-brand text-success" href="#">The Paradise of Travel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

     
      <li class="nav-item">
          <a class="nav-link active text-success" aria-current="page" href="accueil.php">Accueil</a>
        </li>
        <li class="nav-item me-auto">
          <a class="nav-link active text-success" aria-current="page" href="recherche_de_bus.php">Trouver un bus</a>
        </li>
       
                   <span class="nav-item item-btn  ms-auto"> <a href="{{route('deconnexionAdmin')}}" class="btn btn-success text-light  " role="button">Se Deconnecter</a>  </span>

         <!-- <li class="nav-item"> <a href="profil.php" class="btn btn-success text-light m-2 "  role="button">Mon Profil</a></li> -->
         {{-- <span class="nav-item item-btn me-2 "><a href="formulaire_de_connexion.php" class="btn btn-success text-light ">S'inscrire</a></span> 
         <span class="nav-item item-btn me-2"><a href="connexion_admin.php" class="btn btn-success text-light ">Se Connecter</a></span>  --}}
      
     
    </div>
    <span>@if (!empty($dataAdmin))
        {{$dataAdmin->nom}}
    @endif </span>
  </div>
</nav>


<div class="admin container">
<h1 class="pt-3 text-success font-weight-bold"> <i  class="fa fa-gear"></i> Administration</h1>

<div class="row ">
    <section class="col-lg-3">
        <div class="list-group p-2 ">
            <a href="" class="list-group-item active">Aministration</a>
            <a href="{{route('addbus')}}" class="list-group-item text-success"><i class="fa fa-add p-1"></i>Ajouter un bus</a>
            <a href="{{route('listedesbus')}}" class="list-group-item text-success"><i class="fa fa-list p-1"></i>Liste des bus et management des bus</a>
            <a href="{{route('listbussiege')}}" class="list-group-item text-success"><i class="fa-solid fa-pen"></i> Definir des sieges </a>
            <a href="{{route('managmentlistbus')}}" class="list-group-item text-success"><i class="fa-solid fa-bars-progress p-1"></i> Gerer vos sieges </a>
            
            
            <a href="" class="list-group-item text-success"><i class="fa fa-panel p-1"></i>Panneau </a>
            <a href="" class="list-group-item text-success">Mes taches </a>
            <a href="" class="list-group-item text-success">Echeances</a>
        </div>

        <div class="list-group p-2">
            <a href="" class="list-group-item active">Articles </a>
            <a href="" class="list-group-item">Dossier</a>
            <a href="" class="list-group-item">Message</a>
            <a href="" class="list-group-item">Commentaire</a>    
        </div>

        <div class="list-group p-2">
            <a href="" class="list-group-item active">Information</a>
            <a href="" class="list-group-item">Version</a>
            <a href="" class="list-group-item">A propos</a>
            <a href="" class="list-group-item">Deconnexion</a>    
        </div>





    </section>

    <section class="col-lg-9 ">
        <div class="panel border border-success mt-2 rounded ">
            <h3 class="bg-success p-2 text-white text-center rounded-top">Statistiques</h3>

            <div class="panel-body d-flex flex-wrap">
                <div class="col-lg-3 p-3">
                    <div class=" rounded p-3  shadow">
                        <h3 class="text-center text-success"><i class="fa fa-home p-1"></i>456</h3>
                        <h5 class="text-center text-success">Management</h5>
                    </div>

                </div>

                <div class="col-lg-3 p-3">
                    <div class=" rounded p-3 shadow">
                        <h3 class="text-center text-success"><i class="fa fa-signal p-1"></i>456</h3>
                        <h5 class="text-center text-success">Evolution</h5>
                    </div>

                </div>

                <div class="col-lg-3 p-3">
                    <div class=" rounded p-3 shadow">
                        <h3 class="text-center text-success"><i class="fa fa-user p-1"></i>456</h3>
                        <h5 class="text-center text-success">Utilisateur</h5>
                    </div>

                </div>

                <div class="col-lg-3 p-3 ">
                    <div class=" rounded p-3 shadow">
                        <h3 class="text-center text-success"><i class="fa fa-envelope p-1"></i>456</h3>
                        <h5 class="text-center text-success">Message</h5>
                    </div>

                </div>

            </div>
        </div>




        <div class="panel border border-success mt-2 rounded mt-4">
            <h3 class="bg-success p-2 text-white text-center rounded-top">Donnees</h3>

            <div class="panel-body ">
              
                  <div class="container ">
                  <table class="table table-dark table-sm ">
                    <thead>
                        <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col" >Date de naissance</th>
                        <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                          
                             <tbody>
                                
                            </tbody>
                    
                            
                           
                            </table>
                        </div>
                   
               
             

            </div>
        </div>
    </section>


</div>
    

</div>

<!-- partie css : style -->


<style>

.image-profil-navbar{
   
   border-radius: 50%;
   width: 50px;
   height: 50px;
   
}


</style>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>


</html>