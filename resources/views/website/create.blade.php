<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="{{ asset('website') }}/bs5/css/bootstrap.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('website') }}/fa5/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/fa5/css/fontawesome.min.css">
    <!-- Owl Carousel CSS files -->
    <link rel="stylesheet" href="{{ asset('website') }}/owl-used-files/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/owl-used-files/owl.theme.default.min.css">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/post.css">
    <title>Post</title>
</head>

<body class="bg-info">


    <!-- post sec start here -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 main-post">
                    <div class="main-post-wrapper">
                        <div class="title-sec">
                            <h4>Create Feed</h4>
                            <a href="{{ route('feed') }}"><i class="fas fa-times"></i></a>

                        </div>
                        <hr>
                        <div id="owner-info-post">
                            <img src="{{ Voyager::image(auth()->user()->avatar) }}">
                            <p>{{ auth()->user()->name }}</p>
                        </div>
                        <form action="{{route('store-feed')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="number" value="{{ auth()->user()->id }}" name="userid" hidden>
                            <textarea required class="nor-input" placeholder="What's on your mind????" name="details" id="" cols="30" rows="10"></textarea>
                            <input class="nor-input"  type="file" name="image" id="">
                            <div class="button-area">
                                 <input class="post-btn btn btn-success" type="submit" value="Create">
                            </div>
                           
                        </form>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- post sec end here -->







    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="{{ asset('website') }}/bs5/js/bootstrap.min.js"></script>
    <script src="{{ asset('website') }}/js/post.js"></script>
    <script src="{{ asset('website') }}/owl-used-files/owl.carousel.min.js"></script>
</body>

</html>
