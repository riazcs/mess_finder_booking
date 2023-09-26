<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap link -->
  <link rel="stylesheet" href="{{ asset('website') }}/bs5/css/bootstrap.css">
  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{ asset('website') }}/fa5/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('website') }}/fa5/css/fontawesome.min.css">
  <!-- Owl Carousel CSS files -->
  <link rel="stylesheet" href="{{ asset('website') }}/owl-used-files/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('website') }}/owl-used-files/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <title>Rajshahi Home</title>
</head>

<body>

  <!-- navbar start here -->
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="{{route('home')}}">রাজশাহী</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="#property">Property</a></li>
        <li><a href="#about-sec">About</a></li>
        <li><a href="/post">Feed</a></li>
        <li><a href="#contact-area">Contact</a></li>
        @if(auth()->user())
        <li><a href="{{ route('profile', auth()->user()->id)}}">Profile</a></li>
        <?php $bookingMess = App\Models\Booking::where('user_id',  \auth()->user()->id)->where('is_confirm', 1)->first();?>
        @if($bookingMess)
        <li><a href="/meals">Meal</a></li>
        @endif
        @endif
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a href="{{ route('register') }}">{{ __('Register') }}</a>
          or <a href="/login">Login</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a href="{{url('profile_details',  auth()->user()->id)}}" class="text-primary" method="post">Profile
              Details</a>

            <a class="dropdown-item text-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
        <li style="margin-left:20px ;">
          <form method="post" action="{{route('mess.search')}}">@csrf<input class="form-control pr-2"
              placeholder="Search by location" id="search" name="keyword" /></form>
        </li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <!-- navbar end here -->
  <!-- hum start here -->
  <div id="humburger">
    <div class="container">
      <div class="first-icon-wrapper">
        <a href="tel: +8801864339313"><i class="fas fa-phone" aria-hidden="true"></i></a>
      </div>
      <div class="second-icon-wrapper">
        <a href="https://www.facebook.com/profile.php?id=100004745926319" target="_blank"><i class="fab fa-facebook"
            aria-hidden="true"></i></a>
      </div>
      <div class="third-icon-wrapper">
        <i class="fas fa-comments" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <!-- hum end here -->

  @yield('content')

  <!-- footer sec start here -->
  <div id="footer">
    <div class="container">
      <div class="row">


        <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-4 col-12 col-sm-12 footer-follow">
          <h1>Follow</h1>
          <ul>
            <li>
              <a href="https://www.facebook.com/profile.php?id=100004745926319" target="_blank">Facebook</a>
              <a href="">Instagram</a>
              <a href="">Youtube</a>
              <a href="">Linkdin</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-4 col-12 col-sm-12 footer-service">
          <h1>Pages</h1>
          <ul>
            <li>
              <a href="#carouselExampleCaptions">Home</a>
              <a href="#about-sec">About</a>
              <a href="post.html">Post</a>
              <a href="#contact-area">Contact</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-4 col-12 col-sm-12 footer-sub">
          <h1>Subscribe</h1>
          <input type="text" placeholder="Enter your gmail">
          <button id="footer-btn">Subscribe</button>
        </div>

      </div>

    </div>
  </div>

  <!-- footer sec end here -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="{{ asset('website') }}/bs5/js/bootstrap.min.js"></script>
  <script src="{{ asset('website') }}/js/app.js"></script>
  <script src="{{ asset('website') }}/owl-used-files/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- AOS code -->
  <script>
    // AOS.init();
  </script>
</body>

</html>