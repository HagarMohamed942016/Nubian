@extends('master')

@section('content')

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="Hotel Template">
        <meta name="keywords" content="Hotel, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nubian House</title>

    {{--        <!-- Google Font -->--}}
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

        <link rel="stylesheet" href="cssHotel/linearicons.css" type="text/css">


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
    <section class="hero-section set-bg" data-setbg="imgHotel/contact-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact</h1>
                        {{--                        <img src="imgHotel/contact-bg.jpg" >--}}

                    </div>
                </div>
                <div class="page-nav">
                    <!-- <a href="./news.html" class="left-nav"><i class="lnr lnr-arrow-left"></i> News</a> -->
                </div>
            </div>
        </div>
    </section>

    <hr>
    <!-- Hero Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="contact-information">
                            <h2>Contact Information</h2>
                            <ul>
                                <li><img src="{{asset('imgHotel')}}/placeholder-copy.png" alt=""> <span>Aswan, Gharb Sohial Village
                                        </span></li>
                                <li><img src="{{asset('imgHotel')}}/phone-copy.png" alt=""> <span>01110000000</span></li>
                                <li><img src="{{asset('imgHotel')}}/envelop.png" alt=""> <span>hello@email.com</span></li>
                                <li><img src="{{asset('imgHotel')}}/clock-copy.png" alt=""> <span>Everyday: 06:00 - 22:00</span></li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <h2>Follow us on:</h2>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h5>Write us ...</h5>
                        <form action="/send" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>From</p>
                                    <div class="input-group">
                                        <input type="text" placeholder="Full Name" name="name">
                                        <img src="{{asset('imgHotel')}}/edit.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="email" placeholder="Email" name="email">
                                        <img src="{{asset('imgHotel')}}/envelop-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group phone-num">
                                        <input type="text" placeholder="Phone" name="phone">
                                        <img src="{{asset('imgHotel')}}/phone-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="message">
                                        <p>Message</p>
                                        <div class="textarea">
                                            <textarea placeholder="Hi ..." name="text"></textarea>
                                            <img src="{{asset('imgHotel')}}/speech-copy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button  type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.172725180454!2d32.86658948553815!3d24.06022128278798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1436630d506cd46d%3A0x5ffe4478cf21ede8!2sNubian%20Village!5e0!3m2!1sar!2seg!4v1580089215000!5m2!1sar!2seg" height="560" style="border:0;" allowfullscreen="">
        </iframe>
    </div>
    <!-- Map Section End -->




@endsection
