@extends('layouts.commun')

    @section('content')
    
         <section class="mt-7 py-0">
            <div class="bg-holder w-50 bg-right d-none d-lg-block" style="background-image:url(assets/img/gallery/hero-section-1.png);">
            </div> 
            <!--/.bg-holder-->


           
        
            <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
                <h1 class="display-3 text-1000 fw-normal">Let’s make a tour</h1>
                <h1 class="display-3 text-primary fw-bold">Discover the beauty </h1>
                <div class="pt-5">
                    <nav>
                    <div class="nav nav-tabs voyage-tabs" id="nav-tab" role="tablist">
                        {{-- <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-map-marker-alt"></i></button> --}}
                        <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true"> <i class="fas fa-bus"></i></button>
                        {{-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="fas fa-hotel"></i></button> --}}
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        {{-- <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form class="row g-4 mt-5">
                            <div class="col-sm-6 col-md-6 col-xl-5">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputAddress1">Address 1</label>
                                <input class="form-control input-box form-voyage-control" id="inputAddress1" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-5">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputAddress2">Address 2</label>
                                <input class="form-control input-box form-voyage-control" id="inputAddress2" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-5">
                            <div class="input-group-icon">
                                <input class="form-control input-box form-voyage-control" id="inputdateOne" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-5">
                            <div class="input-group-icon">
                                <input class="form-control input-box form-voyage-control" id="inputDateTwo" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-5">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputPersonOne">Person</label>
                                <select class="form-select form-voyage-select input-box" id="inputPersonOne">
                                <option selected="selected">2 Adults</option>
                                <option>2 Adults 1 children</option>
                                <option>2 Adults 2 children</option>
                                </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                            </div>
                            </div>
                            <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                            <button class="btn btn-secondary" type="submit">Search Packages</button>
                            </div>
                        </form>
                        </div> --}}

                        {{-- from bus --}}
                        <div class="tab-pane fade active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <form class="row g-4 mt-5" method="post" action="{{route('traitementclient')}}">
                            @csrf
                            <div class="col-6">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputAddressThree">Address 1</label>
                                <input class="form-control input-box form-voyage-control" id="inputAddressThree" name="depart" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                                @error('depart')
                                    {{$message}}   
                                @enderror
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputAddressFour">Address 2</label>
                                <input class="form-control input-box form-voyage-control" id="inputAddressFour" name="destination" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                                @error('destination')
                                    {{$message}}   
                                @enderror
                            </div>
                            </div>
                           
                            <div class="col-6">
                            <div class="input-group-icon">
                                <input class="form-control input-box form-voyage-control" id="inputDateFour" name="date" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                @error('date')
                                    {{$message}}
                                @enderror
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputPeopleTwo">People</label>
                                <select class="form-select form-voyage-select input-box" name="nbrclient" id="inputPeopleTwo">
                                    @error('nbrclient')
                                        {{$message}}   
                                    @enderror
                                <option value="1" selected="selected">1 passenger</option>
                                <option value="2">2 passengers</option>
                               
                                </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                            </div>
                            </div>
                            <div class="col-12 d-grid mt-6">
                            <button class="btn btn-secondary" type="submit">Search Packages</button>
                            </div>
                        </form>
                        </div>

                        {{-- end form bus --}}

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <form class="row g-4 mt-5">
                            <div class="col-6">
                            <div class="input-group-icon">
                                <input class="form-control input-box form-voyage-control" id="inputDateFive" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="input-group-icon">
                                <input class="form-control input-box form-voyage-control" id="inputDateSix" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="input-group-icon">
                                <label class="form-label visually-hidden" for="inputPeopleThree">Person</label>
                                <select class="form-select form-voyage-select input-box" id="inputPeopleThree">
                                <option selected="selected">2 Adults</option>
                                <option>2 Adults 1 children</option>
                                <option>2 Adults 2 children</option>
                                </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                            </div>
                            </div>
                            <div class="col-12 d-grid mt-6">
                            <button class="btn btn-secondary" type="submit">Search Packages</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </nav>
                </div>
                </div>
            </div>
            </div>
        </section> 
        
        
        <!-- ============================================-->
        <!-- <section> begin ============================-->
       <section class="py-0 overflow-hidden">
        
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0"><img class="img-fluid order-md-0 mb-4 h-100 fit-cover" src="assets/img/gallery/hero-section-2.png" alt="..." /></div>
                <div class="col-lg-6 px-0 bg-primary-gradient bg-offcanvas-right">
                <div class="mx-6 mx-xl-8 my-8">
                    <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/locations.png" alt="..." />
                    <div class="flex-1 align-items-center pt-2">
                        <h5 class="fw-bold text-light">Visit the greatest places</h5>
                    </div>
                    </div>
                    <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/schedule.png" alt="..." />
                    <div class="flex-1 align-items-center pt-2">
                        <h5 class="fw-bold text-light">Make your own plans.</h5>
                    </div>
                    </div>
                    <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/save.png" alt="..." />
                    <div class="flex-1 align-items-center pt-2">
                        <h5 class="fw-bold text-light">Save 50% on your next trip</h5>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div> 
            <!-- end of .container-->
        
    </section> 
        <!-- <section> close ============================-->
    @endsection