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
    <title>Profile</title>
</head>

<body class="bg-info">


    <!-- post sec start here -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-xxl-12 col-md-12 col-sm-12 col-12 main-post">
                    <div class="main-post-wrapper">
                        <div class="title-sec">
                            <h4>Profile</h4>
                            <a href="{{ route('home') }}"><i class="fas fa-times"></i></a>

                        </div>
                        <hr>
                        <div id="owner-info-post">
                            <p>{{ auth()->user() ? auth()->user()->name : '' }}</p>
                        </div>
                        <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="number" value="{{ auth()->user()->id }}" name="userid" hidden>
                            <input value="{{ auth()->user()? auth()->user()->mobile: '' }}" placeholder="Mobile Number" class="form-control mb-1" type="text" name="mobile" id="">
                            <input value="{{ auth()->user()? auth()->user()->address: '' }}" placeholder="Address" class="form-control mb-1" type="text" name="address" id="">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="nidFront">
                                <label class="input-group-text" for="inputGroupFile01">Give NID Front part</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="nidBack">
                                <label class="input-group-text" for="inputGroupFile02">Give NID Back part</label>
                            </div>
                            <div class="button-area">
                                <input class="post-btn btn btn-success" type="submit" value="Update">
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