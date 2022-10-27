@extends('layouts.master')

@section('content')
<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        display: none;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rated:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    .star-rating-complete {
        color: #c59b08;
    }

    .rating-container .form-control:hover,
    .rating-container .form-control:focus {
        background: #fff;
        border: 1px solid #ced4da;
    }

    .rating-container textarea:focus,
    .rating-container input:focus {
        color: #000;
    }

    .rated {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rated:not(:checked)>input {
        position: absolute;
        display: none;
    }

    .rated:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ffc700;
    }

    .rated:not(:checked)>label:before {
        content: '★ ';
    }

    .rated>input:checked~label {
        color: #ffc700;
    }

    .rated:not(:checked)>label:hover,
    .rated:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rated>input:checked+label:hover,
    .rated>input:checked+label:hover~label,
    .rated>input:checked~label:hover,
    .rated>input:checked~label:hover~label,
    .rated>label:hover~input:checked~label {
        color: #c59b08;
    }
</style>
<!-- carousel start here -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
            <img src="{{ asset('website') }}/img/simple-home-interior-design-2.jpg" class="d-block w-100 carou-img" alt="...">
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
            <img src="{{ asset('website') }}/img/simple-home-theatre-room-design.jpg" class="d-block w-100 carou-img" alt="...">
            <div class="carousel-caption">

                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 carou-customize">
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-left">
                        <h2>আপনাকে রাজশাহীতে স্বাগতম</h2>
                        <p>রাজশাহী জেলা বাংলাদেশের উত্তর-পশ্চিমাঞ্চলীয় সীমন্তবর্তী একটি জেলা। এই জেলাটি রাজশাহী বিভাগের
                            অন্তর্গত। অবস্থানগত কারণে এটি বাংলাদেশের একটি বিশেষ শ্রেণীভুক্ত জেলা। রাজশাহী জেলা
                            বাংলাদেশের পুরাতন জেলাগুলোর অন্যতম একটি জেলা।</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-12 col-sm-12 carousel-right">
                        <img src="{{ asset('website') }}/img/home-theater-ideas-jamie-bush-13-rd-murphy-0452-f2-art-lightened-web-1611093686.jpg" class="img-fluid" alt="">
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
    <div class="row justify-content-center mt-2">
        <h2 class="mt-2">Mess Details</h2>
        <div class="col-12">
            <div class="card bg-light text-dark">
                <img style="max-height: 200px;object-position: center;
                        object-fit: cover;" class="card-img-top" src="{{ Voyager::image($mess->image) }}">
                <div class="card-body">
                    <strong class="card-title">{{ $mess->title }}</strong><br>
                    <strong class="text-danger">{{ $mess->price }} ৳</strong>
                    <p class="card-text">{{ $mess->details }}</p>
                    <div style="font-size:12px;">
                        <span class="bg-success p-1 text-light">Room : {{ $mess->room }}</span>
                        <span class="bg-dark p-1 text-light"> Seat : {{ $mess->seat }}</span>
                        <span class="bg-info p-1 text-dark">Floor : {{ $mess->floar }}</span>
                        <a class="bg-danger p-1 text-light" href="{{ env('APP_URL') }}/chat/{{ $mess->user->id }}"><i class="fa-solid fa-comment-sms"></i></a>
                        <button type="button" class="btn btn-sm btn-primary p-1 text-light float-right" data-bs-toggle="modal" data-bs-target="#bookingMess{{$mess->id}}">Booking Now</button>
                        <button type="button" class="btn btn-sm btn-info p-1 text-light" style="text-align: end;" data-bs-toggle="modal" data-bs-target="#giveRating{{$mess->id}}">Give a review</button>
                        <div class="modal fade" id="bookingMess{{$mess->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Booking mess</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>For booking, Please payment this Bkash number. </h5>
                                        <h2><b>Bkash Number: 0156666666</b></h2>
                                        <form action="{{route('booking', $mess->id)}}" method="GET" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" class="form-control" name="transaction" placeholder="Give transaction id" />
                                            <div class="button-area mt-3 float-right">
                                                <input class="post-btn btn btn-success" type="submit" data-bs-dismiss="modal" value="Booking">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="giveRating{{$mess->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Give rating & review.</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col mt-4">
                                                    <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                                                        @csrf
                                                        <h5 class="font-weight-bold ">Review</h5>
                                                        <div class="form-group row">
                                                            <input type="hidden" name="mess_id" value="{{ $mess->id }}">
                                                            <div class="col">
                                                                <div class="rate">
                                                                    <input type="radio" id="star5" class="rate" name="rating" value="5" />
                                                                    <label for="star5" title="text">5 stars</label>
                                                                    <input type="radio" checked id="star4" class="rate" name="rating" value="4" />
                                                                    <label for="star4" title="text">4 stars</label>
                                                                    <input type="radio" id="star3" class="rate" name="rating" value="3" />
                                                                    <label for="star3" title="text">3 stars</label>
                                                                    <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                                    <label for="star2" title="text">2 stars</label>
                                                                    <input type="radio" id="star1" class="rate" name="rating" value="1" />
                                                                    <label for="star1" title="text">1 star</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-4">
                                                            <div class="col">
                                                                <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 text-right">
                                                            <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mini carousel start here -->
<div id="mini-carousel">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-5 col-xl-5 col-xxl-5 col-md-5 col-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card">
                    <img src="{{ asset('website') }}/img/living-room-1835923__480.webp" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">রাজশাহী</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptate
                            consectetur autem totam atque odio nulla pariatur tenetur fugit beatae?</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-xl-7 col-xl-7 col-xxl-7 col-md-7 col-12 col-sm-12 mini-carousel" data-aos="zoom-in-up" data-aos-duration="1000">
                <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione, explicabo architecto at cum vel rerum sint inventore suscipit fugiat laudantium.</marquee>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('website') }}/img/simple-home-interior-design-2.jpg" class="d-block w-100 mini-caru-img" alt="Mini carousel images">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('website') }}/img/simple-home-theatre-room-design.jpg" class="d-block w-100 mini-caru-img" alt="Mini carousel images">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('website') }}/img/suburban-house-illustration_33099-2357 (1).webp" class="d-block w-100 mini-caru-img" alt="Mini carousel images">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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