<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img class="d-inline-block" src="assets/img/gallery/logo.png" width="50" alt="logo" /><span class="fw-bold text-primary ms-2">voyage</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              {{-- <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#destinations"><span class="nav-link-icon text-800 me-1 fas fa-map-marker-alt"></span><span class="nav-link-text">Locations </span></a></li> --}}
              <li class="nav-item px-2"><a class="nav-link" href="{{route('travel')}}"> <span class="nav-link-icon text-800 me-1 fas fa-bus"></span><span class="nav-link-text">Travel</span></a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('hotels')}}"> <span class="nav-link-icon text-800 me-1 fas fa-hotel"></span><span class="nav-link-text">Hotels</span></a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('loisirs')}}"><span class="nav-link-icon text-800 me-1 fas fa-bolt"></span><span class="nav-link-text">Activities</span></a></li>
            </ul>
            <form>              
              {{-- <a href="mmmm" class="btn text-800 order-1 order-lg-0 me-2 text-primary" type="button">S'inscrire</a> --}}
              {{-- <a href="#" class="btn btn-voyage-outline order-0" ><span class="text-primary">support</span></a> --}}
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
            </form>
           
            <a href="{{route('deconnexion')}}" class="btn btn-voyage-outline order-0" ><span class="text-primary">Se Deconnecter</span></a>


           

          </div>

        </div>
      </nav>


       
{{-- le contenu --}}

  @yield('content')
  
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 overflow-hidden">
  
          <div class="container">
            <div class="row">
              <div class="col-6 col-sm-4 col-lg-6">
                <div class="py-7"><img class="d-inline-block" src="assets/img/gallery/logo.png" width="50" alt="logo" /><span class="fw-bold fs-4 text-primary ms-2">voyage</span>
                  <ul class="list-unstyled mt-4">
                    <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">News</a></li>
                    <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
                    <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">Privacy</a></li>
                    <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">About Us</a></li>
                    <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">FAQs</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-8 col-lg-6 bg-primary-gradient bg-offcanvas-right">
                <div class="p-3 py-7 p-md-7">
                  <p class="text-light"><i class="fas fa-phone-alt me-3"></i><span class="text-light">+3930219390</span></p>
                  <p class="text-light"><i class="fas fa-envelope me-3"></i><span class="text-light">something@gmail.com</span></p>
                  <p class="text-light"><i class="fas fa-map-marker-alt me-3"></i><span class="text-light lh-lg">333, Lorem Street, Albania, Alifornia<br/>United States of America</span></p>
                  <div class="mt-6"><a href="#!"> <img class="me-3" src="assets/img/icons/facebook.svg" alt="..." /></a><a href="#!"> <img class="me-3" src="assets/img/icons/twitter.svg" alt="..." /></a><a href="#!"> <img class="me-3" src="assets/img/icons/instagram.svg" alt="..." /></a></div>
                  <p class="mt-3 text-light text-center text-md-start"> Made with&nbsp;
                    <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#EB6453" viewBox="0 0 16 16">
                      <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                    </svg>&nbsp;by&nbsp;<a class="text-light" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
  
  
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{asset('assets/vendors/popperjs/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('assets/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script src="{{asset('js/profil.js')}}"></script>

 
   <style>
    .profil{
      display: none;
    }
   </style>





</body>
</html>