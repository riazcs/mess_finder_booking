

@extends('layouts.master')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('website') }}/img/pexels-photo-1571460.jpeg" class="d-block w-100 carou-img" alt="...">
            <div class="carousel-caption">

                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 carou-customize">
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-left">
                        <h2>আপনাকে রাজশাহীতে স্বাগতম</h2>
                        <p>রাজশাহী জেলা বাংলাদেশের উত্তর-পশ্চিমাঞ্চলীয় সীমন্তবর্তী একটি জেলা। এই জেলাটি রাজশাহী বিভাগের
                            অন্তর্গত। অবস্থানগত কারণে এটি বাংলাদেশের একটি বিশেষ শ্রেণীভুক্ত জেলা। রাজশাহী জেলা
                            বাংলাদেশের পুরাতন জেলাগুলোর অন্যতম একটি জেলা।</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-right">
                        <img src="{{ asset('website') }}/img/living-room-1835923__480.webp" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('website') }}/img/simple-home-interior-design-2.jpg" class="d-block w-100 carou-img"
                alt="...">
            <div class="carousel-caption">

                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 carou-customize">
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-left">
                        <h2>আপনাকে রাজশাহীতে স্বাগতম</h2>
                        <p>রাজশাহী জেলা বাংলাদেশের উত্তর-পশ্চিমাঞ্চলীয় সীমন্তবর্তী একটি জেলা। এই জেলাটি রাজশাহী বিভাগের
                            অন্তর্গত। অবস্থানগত কারণে এটি বাংলাদেশের একটি বিশেষ শ্রেণীভুক্ত জেলা। রাজশাহী জেলা
                            বাংলাদেশের পুরাতন জেলাগুলোর অন্যতম একটি জেলা।</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-right">
                        <img src="{{ asset('website') }}/img/ifycXFxFrobEJng59xnQB5.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('website') }}/img/simple-home-theatre-room-design.jpg" class="d-block w-100 carou-img"
                alt="...">
            <div class="carousel-caption">

                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 carou-customize">
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-left">
                        <h2>আপনাকে রাজশাহীতে স্বাগতম</h2>
                        <p>রাজশাহী জেলা বাংলাদেশের উত্তর-পশ্চিমাঞ্চলীয় সীমন্তবর্তী একটি জেলা। এই জেলাটি রাজশাহী বিভাগের
                            অন্তর্গত। অবস্থানগত কারণে এটি বাংলাদেশের একটি বিশেষ শ্রেণীভুক্ত জেলা। রাজশাহী জেলা
                            বাংলাদেশের পুরাতন জেলাগুলোর অন্যতম একটি জেলা।</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-right">
                        <img src="{{ asset('website') }}/img/home-theater-ideas-jamie-bush-13-rd-murphy-0452-f2-art-lightened-web-1611093686.jpg"
                            class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div id="property"></div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>


</div>
    <!-- post sec start here -->
    <div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 main-post">
                    <div class="main-post-wrapper">
                        <div class="title-sec">
                            <h4>Profile Details</h4>

                        </div>
                        <hr>
                        <div id="owner-info-post">
                            <p>{{ auth()->user() ? auth()->user()->name : '' }}</p>
                        </div>
                        <div id="owner-info-post">
                            <p>{{ auth()->user() ? auth()->user()->mobile : '' }}</p>
                        </div>
                        <div id="owner-info-post">
                            <p>{{ auth()->user() ? auth()->user()->address : '' }}</p>
                        </div>
                        <div id="owner-info-post">
                            <img style="max-height: 200px;object-position: center;
                            object-fit: cover;" class="card-img-top" src="{{ Voyager::image(auth()->user()->image) }}">
                        </div>
                       
                       
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- post sec end here -->
@endsection






