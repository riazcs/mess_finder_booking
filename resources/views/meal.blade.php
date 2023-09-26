@extends('layouts.master')

@section('content')
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
        <h2 class="mt-5">Mess @if(Auth::user() && $booking->is_confirm ==1)
            <button type="button" class="btn btn-sm btn-success p-1 text-light float-right" data-bs-toggle="modal"
                data-bs-target="#addMeal">Add
                Meal</button>
            @endif
        </h2>
        <div class="modal fade" id="addMeal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Meal Add</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{route('meals.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label for="exampleFormControlInput1" class="form-label">Meal Date</label>
                                <input type="date" class="form-control" name="meal_date" placeholder="Meal date" />
                            </div>
                            <div class="my-3">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="morning"
                                        value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">Morning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="noon"
                                        value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">Noon</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="night"
                                        value="1">
                                    <label class="form-check-label" for="inlineCheckbox3">Night</label>
                                </div>
                            </div>

                            <div class="button-area mt-3 float-right">
                                <input class="post-btn btn btn-success" type="submit" data-bs-dismiss="modal"
                                    value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table caption-top">
            <caption>List of meals</caption>
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Morning</th>
                    <th scope="col">Noon</th>
                    <th scope="col">Night</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($meals as $meal)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$meal->meal_date}}</td>
                    <td>{{$meal->morning == 1 ? "ON" : "OFF"}}</td>
                    <td>{{$meal->noon ? "ON" : "OFF"}}</td>
                    <td>{{$meal->night ? "ON" : "OFF"}}</td>
                    <td> <a class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#updateMeal{{$meal->id}}"><i class="fa fa-pencil"></i></a></td>
                    <div class="modal fade" id="updateMeal{{$meal->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Meal Add</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="{{route('meals.update', $meal->id)}}" method="PUT"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="my-3">
                                            <label for="exampleFormControlInput1" class="form-label">Meal Date</label>
                                            <input type="date" class="form-control" name="meal_date"
                                                placeholder="Meal date" value="{{ $meal->meal_date}}" />
                                        </div>
                                        <div class="my-3">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="morning" value="{{ $meal->morning}}" @if($meal->morning)
                                                checked @endif>
                                                <label class="form-check-label" for="inlineCheckbox1">Morning</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    name="noon" value="{{ $meal->noon}}" @if($meal->noon)
                                                checked @endif>
                                                <label class="form-check-label" for="inlineCheckbox2">Noon</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    name="night" value="{{ $meal->night}}" @if($meal->night)
                                                checked @endif>
                                                <label class="form-check-label" for="inlineCheckbox3">Night</label>
                                            </div>
                                        </div>

                                        <div class="button-area mt-3 float-right">
                                            <input class="post-btn btn btn-success" type="submit"
                                                data-bs-dismiss="modal" value="Add">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- About start here -->
<div id="about-sec" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-duration="1500">
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
                <iframe src="https://www.youtube.com/embed/wSPOefDFgb4" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
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
            <div class="col-lg-5 col-xl-5 col-xl-5 col-xxl-5 col-md-5 col-12 col-sm-12" data-aos="zoom-in"
                data-aos-duration="1000">
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
                data-aos="zoom-in-up" data-aos-duration="1000">
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