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
                <img src="{{ asset('website') }}/img/pexels-photo-1571460.jpeg" class="d-block w-100 carou-img"
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
                            <img src="{{ asset('website') }}/img/living-room-1835923__480.webp" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('website') }}/img/ifycXFxFrobEJng59xnQB5.jpg" class="img-fluid"
                                alt="">
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
    <div id="post">
        <div class="container">
            <div class="row mt-5">
                    @foreach ($feeds as $item)
                        <div class="col-lg-7 col-xl-7 col-xxl-7 col-md-7 col-sm-11 col-11 user-post-main"
                            id="user-post-main-one">
                            <div class="user-post-child">
                                <div class="user-info">
                                    <img src="{{Voyager::image($item->user->avatar)}}"
                                        class="img-fluid" alt="">
                                    <p class="user-name">{{ $item->user->name }}</p>
                                    <p class="post-time">{{ $item->created_at->format('M d, Y') }}</p>
                                </div>

                                <p class="create-post">{!! $item->details !!}</p>
                                <img src="{{ Voyager::image($item->image) }}" class="img-fluid"
                                    class="create-post-img">

                                <div class="comments-area">
                                    <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-4 col-sm-5 col-5 comment">
                                        <i class="far fa-comment"></i>
                                        <p class="comment-count">4.2M Others</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




            </div>
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


