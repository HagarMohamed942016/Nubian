@extends('master')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Hotel Template">
        <meta name="keywords" content="Hotel, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About- Template</title>

        <!-- Google Font -->
    {{--        <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"--}}
    {{--              rel="stylesheet">--}}
    {{--        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">--}}

    <!-- Css Styles -->
        <link rel="stylesheet" href="cssHotel/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/flaticon.css" type="text/css">
        {{--        <link rel="stylesheet" href="cssHotel/linearicons.css" type="text/css">--}}
        <link rel="stylesheet" href="cssHotel/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/nice-select.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/style.css" type="text/css">


        <!-- Js Plugins -->
        <script src="jsHotel/jquery-3.3.1.min.js"></script>
        <script src="jsHotel/bootstrap.min.js"></script>
        <script src="jsHotel/jquery.magnific-popup.min.js"></script>
        <script src="jsHotel/jquery-ui.min.js"></script>
        <script src="jsHotel/jquery.nice-select.min.js"></script>
        <script src="jsHotel/jquery.slicknav.js"></script>
        <script src="jsHotel/owl.carousel.min.js"></script>
        <script src="jsHotel/main.js"></script>


    </head>


    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="imgHotel/aboot.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About</h1>
                    </div>
                </div>
                {{--                <div class="page-nav">--}}
                {{--                    <a href="./index.html" class="left-nav"><i class="lnr lnr-arrow-left"></i> Home</a>--}}
                {{--                    <a href="./services.html" class="right-nav">Services <i class="lnr lnr-arrow-right"></i></a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Room Section Begin -->
    <div class="about-us-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2>“Customers may forget what you said  but they will never forget how you made them
                        feel”.</h2>
                </div>
            </div>
            <div class="about-para">
                <div class="row">
                    <div class="col-lg-6">
                        <p>The air conditioning and heater feature ensure a comfortable indoor climate in the rooms.
                            Guests can enjoy views of the Nile from the balcony.
                            The living and sleeping section contains a double bed or a king size bed.
                            There is a minibar as well.
                            The presence of a fridge is also among the essential equipment. </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Convenient facilities, such as a direct-dial phone and a TV with cable,
                            satellite, radio and Wi-Fi reception (for an additional fee),
                            offer a wide choice of entertainment and social contact.
                            The bathroom fitted with a shower and bath tub includes a hair dryer.
                            This hotel offers non-smoking rooms. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Room Section End -->

    <!-- Video Tour Section Begin -->
    <section class="video-tour set-bg" data-setbg="imgHotel/nubian.jpg">
        <div class="container">
            <div class="video-text">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Video Hotel Tour</h2>
                    </div>
                </div>
                <div class="video-play-btn">
                    <a href="https://www.youtube.com/watch?v=rHmh3W6hNa0" class="pop-up"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Tour Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-text">
                        <h2>Hotel Gallery</h2>
                        <p>These are pictures of the hotel and some of the tours that visited the hotel.</p>
                        <a href="#" class="primary-btn">View Gallery <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="imgHotel/zaa.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="imgHotel/hotel1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="imgHotel/zaz.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="imgHotel/zza.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Staff Section End -->
    <section class="staff-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="imgHotel/bbbbb.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Sarah Ahmed</h5>
                            <span>Hotel Manager</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="imgHotel/ooo.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Ali Gamal</h5>
                            <span>Hotel Manager</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="imgHotel/sss.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Ahmed Mohsen</h5>
                            <span>Hotel Manager</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Staff Section End -->

@endsection
