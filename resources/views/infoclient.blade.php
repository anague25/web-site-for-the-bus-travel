<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body class="bg-body-tertiary">
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .entete{
        background-color: #3011BC;
      }
      nav{
        background-color: white;
      }
      nav .container a{
        color: #3011BC;
        font-weight: bold;
      }
      .text{
        color: #3011BC;
      }
      .placecolorfree{
        background-color:#3011BC;
      }
    </style>

    
    <!-- Custom styles for this template -->
  
  
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
    <nav class="navbar navbar-expand-lg " aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" href="#">The Paradise Of Travel</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/">Accueil</a>
            </li>
           
           
          </ul>
          {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> --}}
        </div>
      </div>
    </nav>



    <main>

        <div class="container-fluid  p-4  d-flex justify-content-center  text-light entete">
            <div class="col-9  ">
            <div class="row text-uppercase font-weight-bold">
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    Nom de l'agence
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6 ">
                 <span class="float-end">  {{$idbus->nomdelagence}}</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                date de voyage
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    <span class="float-end"> {{$idbus->jour}}</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                  Depart de 
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    <span class="float-end"> {{$idbus->lieudedepart}}</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                   destination pour
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    <span class="float-end"> {{$idbus->destination}}</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                   nombre de place dans le bus
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    <span class="float-end"> {{$idbus->totaldeplacedubus}}</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                  nombre de place restant
               </div>
               <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                   <span class="float-end"> {{$idbus->restedeplace}}</span>
               </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                  Prix du ticket
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    <span class="float-end"> {{$idbus->prixdusiege}}</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    Matricule du bus
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                    <span class="float-end"> {{$idbus->matricule}}</span></span>
                </div>
            </div>
        </div>
        </div>

        @switch($nbrclient)
          @case(1)
          <div class=" bg-white p-3 container-fluid ">
            <h1 class="text-center  text-uppercase " style="color:#3011BC;">information du passage</h1>
            </div>
                {{-- form 1 --}}
                <div class="container p-3 mt-4">
                    
                    <form method="post" action="{{route('traitementinfoclient',["idbus"=>$idbus->id,"nbrclient"=>$nbrclient])}}">
                        @csrf
                        @if (session()->has('successclient'))
                        <div class="alert alert-success text-center">
                         <h3>
                           {{  session()->get('successclient')}}
                         </h3>
                         </div> 
                     @endif
                    
                     @if (session()->has('echecclient'))
                        <div class="alert alert-danger  text-center">
                         <h1>
                           {{  session()->get('echecclient')}}
                         </h1>
                         </div> 
                     @endif

                   

                     @if (session()->has('idnum'))
                     <div class="" style="padding-bottom: 1px;">
                      {{-- {{route('telechargerticket',[session()->get('idnumeroduticket')])}} --}}
                       <a href="{{route('pdf',[session()->get('idnum')])}}" class="btn btn-success float-end ">telecharger votre ticket</a>
                      </div> 
                  @endif
                   

                        <div class="text bg-white mt-4 p-3">
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label fs-4" style="font-weight:700;">Nom Et Prenom</label>
                            <input type="text" class="form-control @error('nometprenom') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nometprenom">
                            @error('nometprenom')
                                {{$message}}    
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fs-4" style="font-weight:700;" >Numero de telephone</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="tel1">
                            @error('tel1')
                            {{$message}}    
                        @enderror
                        </div>
                    </div>
                        {{-- siege --}}
                       <div class="bg-white mt-3 p-3">
                            <h2 class="text text-center text-uppercase p-2">veuillez choisir l'emplacement du siege </h2>
                            @foreach ($siege as $item)
                            <div class="d-inline-flex text-white">
                                @if ($item->statusdusiege == "libre")
                                <div class="p-2 placecolorfree ps-4 m-2">
                                    <div class="form-check form-check-inline text-center placecolorfree font-weight-bold "   >
                                        <label class="form-check-label font-weight-bold" style="font-weight:700;" for="{{$loop->iteration}}"><span > A{{$loop->iteration}} </span></label>
                                        <input type="checkbox" class="form-check-input " name="siege[]"  id="{{$loop->iteration}}" value="{{$item->numerodusiege}}">
                                       
                                    </div>
                                </div>
                                @else
                                <div class="p-2 bg-danger ps-4 m-2">
                                    <div class="form-check form-check-inline text-center  bg-danger font-weight-bold ">
                                        <input type="checkbox" class="form-check-input" id="{{$loop->iteration}}" value="{{$item->numerodusiege}}" disabled>
                                        <label class="form-check-label" style="font-weight:700;" for="{{$loop->iteration}}">A{{$loop->iteration}}</label>
                                    </div>
                                </div>
                                @endif
                                
                            </div>

                            @endforeach
                            @error('siege')
                           <span class="text-danger"> {{$message}}</span>    
                        @enderror
                           
                        </div>

                        {{-- numero du ticket --}}
                           
                        <div class="mb-3 bg-white p-3 mt-4">
                            <label for="exampleInputPassword1" style="font-weight:700;" class="form-label fs-4 "><span class="text"> votre numero du ticket sera le :</span></label>
                            <select name="numeroduticket" id="exampleInputPassword1" class="form-control">
                                <option selected value="{{$rand}}">{{$rand}}</option>
                            </select>
                            @error('numeroduticket')
                                        {{$message}}    
                                    @enderror
                            </div>
                            

                        <button type="submit" class="btn btn-success form-control">Valider</button>
                    </form>
                </div>
        @break

    @case(2)
        <span>2222222</span>
        @break

    @default
        <div class="alert alert-danger text-center text-uppercase h2 p-2">violation detecte</div>
        <div class="container">
            <h1 class="text-center text-uppercase mt-5">404 error</h1>
            <div class="d-flex justify-content-center">
                <a href="/home" class="btn btn-primary  mt-5 ">retourner a la page d'acceuil</a>
            </div>
        </div>
@endswitch




           
        
            
        











        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
    </html>