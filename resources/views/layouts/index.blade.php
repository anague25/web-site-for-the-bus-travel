<h1 class="text-center pt-3">Administrateur</h1>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href='{{asset("vendors/plugins/fontawesome-free/css/all.min.css")}}'>

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href='{{asset("vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}'>

<link rel="stylesheet" href='{{asset("vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}'>

<link rel="stylesheet" href='{{asset("vendors/plugins/jqvmap/jqvmap.min.css")}}'>

<link rel="stylesheet" href='{{asset("vendors/dist/css/adminlte.min.css?v=3.2.0")}}'>

<link rel="stylesheet" href='{{asset("vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}'>

<link rel="stylesheet" href='{{asset("vendors/plugins/daterangepicker/daterangepicker.css")}}'>

<link rel="stylesheet" href="{{asset('vendors/plugins/summernote/summernote-bs4.min.css')}}">
<script nonce="2f579873-8421-4e37-9e53-3d9a868edf4b">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})),{})))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{asset('vendors/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{route('homeadmin')}}" class="nav-link">Home</a>
</li>
<li class="float-left">

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

</li>

</ul>


</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
<img src="{{asset('vendors/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Administrateur</span>
</a>

<div class="sidebar">

  <div class="user-panel mt-3 pb-3 mb-3 d-flex">

  <div class="info">
  <a href="{{route('addbus')}}" class="d-block"><i class=" "></i>Ajouter un bus</a>
  </div>
  </div>


  <div class="user-panel mt-3 pb-3 mb-3 d-flex">

    <div class="info">
    <a href="{{route('listedesbus')}}" class="d-block"><i class=""></i>Liste des bus et <br> management des bus</a>

    </div>
    </div>


  

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="{{route('listbussiege')}}" class="d-block"><i class=""></i> Definir des sieges </a>

        </div>
        </div>
 

  
</div>

</aside>

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard v1</li>
</ol>
</div>
</div>
</div>
</div>


<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>{{collect($dataAdmin3)->count()}}</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>65</h3>
<p>Unique Visitors</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>



</div>
</section>


<section class="user mx-2">

  <section class="d-flex justify-content-between border">
    <div class="panel border border-success mt-2 rounded col-5 p-0">
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
                    <h3 class="text-center text-success"><i class="fa fa-user p-1"></i>{{collect($dataAdmin2)->count()}}</h3>
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




    <div class="panel border border-success mt-2 rounded  col-6 p-0">
        <h3 class="bg-success p-2 text-white text-center rounded-top w-100">Donnees</h3>

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
                    <th scope="col" >sexe</th>
                    <th scope="col" >tel</th>
                    {{-- <th scope="col" colspan="2">Action</th> --}}
                    </tr>
                </thead>
                      
                         <tbody>
                          @foreach ($dataAdmin2 as $list)
                          <tr class="text-center align-middle">
                            <th scope="row">{{$loop->index+1 /*$loop->index+1 ou $loop->iteration*/}}</th>
                            <td >{{$list->nom}}</td>
                            <td >{{$list->prenom}}</td>
                            <td >{{$list->email}}</td>
                            <td >{{$list->datedenaissance}}</td>
                            <td >{{$list->sexe}}</td>
                            <td >{{$list->tel}}</td>
                            {{-- <td ><button class="btn btn-danger">bloquer</button></td>
                            <td ><button class="btn b"></button></td> --}}
                          </tr>  
                          @endforeach
                         
                        </tbody>
                
                        
                       
                        </table>
                    </div>

        </div>
    </div>
  </section>
</section>

</div>

<footer class="main-footer">
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 3.2.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="{{asset('vendors/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('vendors/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendors/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('vendors/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{asset('vendors/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('vendors/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('vendors/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('vendors/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('vendors/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('vendors/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('vendors/dist/js/adminlte.js?v=3.2.0')}}"></script>

<script src="{{asset('vendors/dist/js/demo.js')}}"></script>

<script src="{{asset('vendors/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('js/profil.js')}}"></script>

</body>
</html>
