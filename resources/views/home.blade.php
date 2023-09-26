@extends('layouts.master')

@section('content')
<style>
    /*	Reset & General
---------------------------------------------------------------------- */
    * {
        margin: 0px;
        padding: 0px;
    }

    .tile {
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 2px 3px -1px rgba(151, 171, 187, 0.7);
        float: left;
        transform-style: preserve-3d;
        margin: 10px 5px;

    }


    .banner-img {
        padding: 5px 5px 0;
    }

    .banner-img img {
        width: 100%;
        border-radius: 5px;
    }

    .dates {
        border: 1px solid #ebeff2;
        border-radius: 5px;
        padding: 20px 0px;
        margin: 10px 20px;
        font-size: 16px;
        color: #5aadef;
        font-weight: 600;
        overflow: auto;
    }

    .dates div {
        float: left;
        width: 50%;
        text-align: center;
        position: relative;
    }

    .dates strong,
    .stats strong {
        display: block;
        color: #adb8c2;
        font-size: 11px;
        font-weight: 700;
    }

    .dates span {
        width: 1px;
        height: 40px;
        position: absolute;
        right: 0;
        top: 0;
        background: #ebeff2;
    }

    .stats {
        border-top: 1px solid #ebeff2;
        background: #f7f8fa;
        overflow: auto;
        padding: 15px 0;
        font-size: 16px;
        color: #59687f;
        font-weight: 600;
        border-radius: 0 0 5px 5px;
    }

    .stats div {
        border-right: 1px solid #ebeff2;
        width: 33.33333%;
        float: left;
        text-align: center
    }

    .stats div:nth-of-type(3) {
        border: none;
    }

    div.footer {
        text-align: right;
        position: relative;
        margin: 20px 5px;
    }

    div.footer a.Cbtn {
        padding: 10px 25px;
        background-color: #DADADA;
        color: #666;
        margin: 10px 2px;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        border-radius: 3px;
    }

    div.footer a.Cbtn-primary {
        background-color: #5AADF2;
        color: #FFF;
    }

    div.footer a.Cbtn-primary:hover {
        background-color: #7dbef5;
    }

    div.footer a.Cbtn-danger {
        background-color: #fc5a5a;
        color: #FFF;
    }

    div.footer a.Cbtn-danger:hover {
        background-color: #fd7676;
    }
</style>
<!-- carousel start here -->
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
<!-- carousel end here -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <h2 class="mt-5">Mess @if(auth()->user() && auth()->user()->user_type == 1)<a class="btn btn-dark text-light"
                href="{{route('add')}}">Add</a>@endif</h2>
        {{-- <div class="col-md-4">
            <a href="{{route('mess_details', $item->id)}}">
                <div class="card bg-light text-dark">
                    <img style="max-height: 200px;object-position: center;
                        object-fit: cover;" class="card-img-top" src="{{ Voyager::image($item->image) }}">
                    <div class="card-body">
                        <strong class="card-title">{{ $item->title }}</strong><br>
                        <strong class="text-danger">{{ $item->price }} ৳</strong>
                        <p class="card-text">{{ $item->details }}</p>
                        <div style="font-size:12px;">
                            <span class="bg-success p-1 text-light">Room : {{ $item->room }}</span>
                            <span class="bg-dark p-1 text-light"> Seat : {{ $item->seat }}</span>
                            <span class="bg-info p-1 text-dark">Floor : {{ $item->floar }}</span>
                            <a class="bg-danger p-1 text-light"
                                href="{{ env('APP_URL') }}/chat/{{ $item->user->id }}"><i
                                    class="fa-solid fa-comment-sms"></i></a>
                        </div>

                    </div>
                </div>
            </a>
        </div> --}}
        <div class="container">
            <div class="row">
                @foreach ($properties as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <a href="{{route('mess_details', $item->id)}}">
                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">{{$item->itle}}</div>

                                <div class="banner-img">
                                    <img src="{{ Voyager::image($item->image) }}" alt="Image 1">
                                </div>



                                <div class="stats">

                                    <div>
                                        <strong>Room:</strong> {{$item->room}}
                                    </div>

                                    <div>
                                        <strong>Seat</strong> {{$item->seat}}
                                    </div>

                                    <div>
                                        <strong>Floor</strong> {{$item->floar}}
                                    </div>
                                </div>
                                <div class="stats">

                                    <div>
                                        <strong>Description:</strong> {{$item->details}}
                                    </div>

                                    <div>
                                        <strong>Price</strong> {{$item->price}}
                                    </div>

                                    <div>
                                        @if( $item->user && $item->user->id)
                                        <a class="bg-danger p-1 text-light"
                                            href="{{ env('APP_URL') }}/chat/{{ $item->user->id }}"><i
                                                class="fa-solid fa-comment-sms"></i></a>
                                        <strong>Chat</strong>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- About start here -->
<div id="about-sec" data-aos-easing="linear" data-aos-duration="1500" data-aos-duration="1500">
    <div class="container">
        <h1 class="text-center text-white p-3">About Me</h1>
        <div class="row" id="about-child">
            <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12">
                <h6>About Me</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora mollitia facere id incidunt. Optio
                    nihil quod esse inventore, veniam ipsa tempora illum, maxime nisi ratione neque dolor saepe nulla
                    excepturi ex dolores facilis molestias. Neque illum beatae voluptatibus architecto, nam saepe
                    molestias voluptatem ut nobis magnam hic autem harum sunt?</p>
            </div>
            <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12">
                <iframe width="719" height="405" src="https://www.youtube.com/embed/ItCWePHa8Bs"
                    title="Resolve code block problem as no such file or directory" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>


        </div>
    </div>
</div>
<!-- About end here -->

<!-- Mini carousel start here -->
<div id="mini-carousel">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-5 col-xl-5 col-xxl-5 col-md-5 col-12 col-sm-12" data-aos-duration="1000">
                <div class="card">
                    <img src="{{ asset('website') }}/img/living-room-1835923__480.webp" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">রাজশাহী</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptate
                            consectetur autem totam atque odio nulla pariatur tenetur fugit beatae?</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-xl-7 col-xl-7 col-xxl-7 col-md-7 col-12 col-sm-12 mini-carousel"
                data-aos-duration="1000">
                <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione, explicabo architecto at cum vel rerum sint inventore suscipit fugiat laudantium.</marquee>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('website') }}/img/simple-home-interior-design-2.jpg"
                                class="d-block w-100 mini-caru-img" alt="Mini carousel images">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('website') }}/img/simple-home-theatre-room-design.jpg"
                                class="d-block w-100 mini-caru-img" alt="Mini carousel images">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('website') }}/img/suburban-house-illustration_33099-2357 (1).webp"
                                class="d-block w-100 mini-caru-img" alt="Mini carousel images">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mini carousel end hrer -->
<!-- owl carousel start here -->
{{-- <section class="customer" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container">
        <h2>Our Services</h2>

        <div class="customer-container owl-carousel owl-theme">
            <!-- customer -->
            <article>
                <div class="img-box">
                    <img src="img/home-theater-ideas-jamie-bush-13-rd-murphy-0452-f2-art-lightened-web-1611093686.jpg"
                        alt="customer">
                </div>

                <div class="customer-text">
                    <h4>Fardin Fuad Ankon</h4>
                    <p>Address: Rajshahi College Road</p>
                    <p>Road No: 1212</p>
                    <p>Room: 5</p>
                </div>
            </article>
            <!-- end of customer -->

            <!-- customer -->
            <article>
                <div class="img-box">
                    <img src="img/ifycXFxFrobEJng59xnQB5.jpg" alt="customer">
                </div>

                <div class="customer-text">
                    <h4>Fardin Fuad Ankon</h4>
                    <p>Address: Rajshahi College Road</p>
                    <p>Road No: 1212</p>
                    <p>Room: 5</p>
                </div>
            </article>
            <!-- end of customer -->

            <!-- customer -->
            <article>
                <div class="img-box">
                    <img src="img/living-room-1835923__480.webp" alt="customer">
                </div>

                <div class="customer-text">
                    <h4>Fardin Fuad Ankon</h4>
                    <p>Address: Rajshahi College Road</p>
                    <p>Road No: 1212</p>
                    <p>Room: 5</p>
                </div>
            </article>
            <!-- end of customer -->

            <!-- customer -->
            <article>
                <div class="img-box">
                    <img src="img/pexels-photo-1571460.jpeg" alt="customer">
                </div>

                <div class="customer-text">
                    <h4>Fardin Fuad Ankon</h4>
                    <p>Address: Rajshahi College Road</p>
                    <p>Road No: 1212</p>
                    <p>Room: 5</p>
                </div>
            </article>
            <!-- end of customer -->

            <!-- customer -->
            <article>
                <div class="img-box">
                    <img src="img/simple-home-theatre-room-design.jpg" alt="customer">
                </div>

                <div class="customer-text">
                    <h4>Fardin Fuad Ankon</h4>
                    <p>Address: Rajshahi College Road</p>
                    <p>Road No: 1212</p>
                    <p>Room: 5</p>
                </div>
            </article>
            <!-- end of customer -->

            <!-- customer -->
            <article>
                <div class="img-box">
                    <img src="img/suburban-house-illustration_33099-2357 (1).webp" alt="customer">
                </div>

                <div class="customer-text">
                    <h4>Fardin Fuad Ankon</h4>
                    <p>Address: Rajshahi College Road</p>
                    <p>Road No: 1212</p>
                    <p>Room: 5</p>
                </div>
            </article>
            <!-- end of customer -->
        </div>
    </div>
</section> --}}

<!-- owl carousel end here -->


<!-- contact start here -->
<div id="contact-area">
    <div class="contact-area-child">
        <div class="section-header">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos eaque doloremque,
                    nulla mollitia facilis temporibus ullam voluptas nostrum consequatur? Fugiat vitae sint quo est
                    eveniet perspiciatis eum asperiores ipsam.</p>
            </div>
        </div>

        <div class="container">
            <div class="con-row">

                <div class="contact-info" data-aos="fade-down" data-aos-duration="1500">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-home"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Address</h4>
                            <p>Rajshahi College Road,<br /> Rajshahi, Rajshahi, <br />1212</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Phone</h4>
                            <p>01700-0000**</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p>fizvaiya@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form" data-aos="fade-up" data-aos-duration="1500">
                    <form action="" id="contact-form">
                        <h2>Send Message</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="">
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="">
                            <span>Email</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name=""></textarea>
                            <span>Type your Message...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Send" name="">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- contact end here -->
@endsection