@extends('master')

@section('content')

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Nubian House</title>



        <!--
        Journey Template
        http://www.templatemo.com/tm-511-journey
        -->
        <!-- load stylesheets -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
        <link rel="stylesheet" href="cssJourney/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" type="text/css" href="cssJourney/datepicker.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="cssJourney/templatemo-style.css">                                   <!-- Templatemo style -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- load JS files -->
        <script src="jsJourney/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="jsJourney/popper.min.js"></script>                    <!-- https://popper.js.org/ -->
        <script src="jsJourney/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="jsJourney/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="jsJourney/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
        <script src="jsJourney/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
        <script>
            /* Google Maps
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(37.769725, -122.462154),
                    scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                    calculateCenter();
                });

                google.maps.event.addDomListener(window, 'resize', function() {
                    map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }

            /* DOM is ready
            ------------------------------------------------*/
            $(function(){

                // Change top navbar on scroll
                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        $(".tm-top-bar").removeClass("active");
                    }
                });

                // Smooth scroll to search form
                $('.tm-down-arrow-link').click(function(){
                    $.scrollTo('#tm-section-search', 300, {easing:'linear'});
                });

                // Date Picker in Search form
                var pickerCheckIn = datepicker('#inputCheckIn');
                var pickerCheckOut = datepicker('#inputCheckOut');

                // Update nav links on scroll
                $('#tm-top-bar').singlePageNav({
                    currentClass:'active',
                    offset: 60
                });

                // Close navbar after clicked
                $('.nav-link').click(function(){
                    $('#mainNav').removeClass('show');
                });

                // Slick Carousel
                $('.tm-slideshow').slick({
                    infinite: true,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });

                loadGoogleMap();                                       // Google Map
                $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
            });

        </script>



    </head>


    <section class="tm-banner">
        <div class="tm-container-outer tm-banner-bg">
            <div class="container">
                <div class="row tm-banner-row tm-banner-row-header">
                    <div class="col-xs-12">
                        <div class="tm-banner-header">
                            <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                            <img src="imgJourney/dots-3.png" alt="Dots">
                            <p class="tm-banner-subtitle">We assist you to choose the best.</p>
                            <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>
                        </div>
                    </div>  <!-- col-xs-12 -->
                </div> <!-- row -->
                <div class="row tm-banner-row" id="tm-section-search">

                    <form action="/trip" method="post" class="tm-search-form tm-section-pad-2">
                        @csrf
                        <div class="form-row tm-search-form-row">
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                <label for="inputCity"> Email</label>
                                <input name="email" type="text" class="form-control" id="inputCity" placeholder="Enter your email..."  value="{{old('email')}}">
                            </div>
                            <div class="form-group tm-form-group tm-form-group-1">
                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                    <label for="inputRoom">How many person?</label>
                                    <select name="No_of_person" class="form-control tm-select" id="inputRoom"  value="{{old('No_of_person')}}">
                                        <option value="0" selected>Select No. of Person </option>
                                        <option value="1">1 </option>
                                        <option value="2">2 </option>
                                        <option value="3">3 </option>
                                        <option value="4">4 </option>
                                        <option value="5">5 </option>
                                        <option value="6">6 </option>
                                        <option value="7">7 </option>
                                        <option value="8">8 </option>
                                        <option value="9">9 </option>
                                        <option value="10">10 </option>
                                    </select>
                                </div>
                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                    <label for="inputAdult">&nbsp;</label>

                                </div>
                                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                                    <label for="inputChildren">Date</label>
                                    <input type="date" name="date" class="form-control">
                                    <div id="inputCheckIn"></div>
{{--                                    <input name="date" type="date" class="form-control" id="inputCheckIn" placeholder="DD/MM/YYYY">--}}

                                </div>
                            </div>
                        </div> <!-- form-row -->
                        <div class="form-row tm-search-form-row">



                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                <label for="inputCheckOut">Select Your Destination</label>
                                <div name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="">
                                    <select name="Name_of_trip" class="form-control tm-select" id="inputChildren"  value="{{old('Name_of_trip')}}">
                                        <option value="" selected>Select Your Trip</option>
                                        @foreach($journeys as $journey)
                                            <option value="{{$journey->Name_of_trip}}">{{$journey->Name_of_trip}}</option>
                                            @endforeach


                                    </select>



                                </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                <label for="btnSubmit">&nbsp;</label>
                                <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Check Availability</button>

                                @if($errors->any())
                                    <p style="color: red">{{$errors->first()}}</p>
                                @endif

                            </div>
                        </div>
                    </form>

                </div> <!-- row -->
                <div class="tm-banner-overlay"></div>
            </div>  <!-- .container -->
        </div>     <!-- .tm-container-outer -->
    </section>

    <section class="p-5 tm-container-outer tm-bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                    <h2 class="text-uppercase mb-4">Your <strong>Journey</strong> is our priority</h2>
                    <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="tm-container-outer" id="tm-section-2">
        <section class="tm-slideshow-section">
            <div class="tm-slideshow">
                <img src="imgJourney/abusimbel.jpg" alt="Image">
                <img src="imgJourney/philla.jpg" alt="Image">
                <img src="imgJourney/A.jpg" alt="Image">
            </div>
            <div class="tm-slideshow-description tm-bg-primary">
                <h2 class="">Abu Simbel</h2>
                <p>Abu Simbel is in southern Egypt, not far from the border with Sudan. It is administratively part of the Aswan Governorate. The Sudanese border is only about 20 kilometers away to the southwest; the border departs from the 22nd parallel here and forms the Wadi Halfa Salient. However, the course of the border is disputed; Egypt claims the territory of the Wadi Halfa Salient up to the 22nd parallel in the south.</p>
            </div>
        </section>
        <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">

            <div class="tm-right tm-slideshow tm-slideshow-highlight">
                <img src="imgJourney/philla.jpg" alt="Image">
                <img src="imgJourney/nubian-museum.jpg" alt="Image">
                <img src="imgJourney/abusimbel.jpg" alt="Image">
            </div>

            <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                <h2 class="">Philla Tempel</h2>
                <p>Philae in Greek or Pilak in ancient Egyptian, meaning ‘the end,’ defined the southern most limit of Egypt. It was begun by Ptolemy II and completed by the Roman Emperors.

                    Kiosk of Trajan oil paintingThe Temple was dedicated to the goddess Isis, the wife of Osiris and mother of Horus. These three characters dominate ancient Egyptian culture and their story possesses all the drama of a Shakespearian tragedy.</p>
            </div>

        </section>
        <section class="tm-slideshow-section">
            <div class="tm-slideshow">
                <img src="imgJourney/A.jpg" alt="Image">
                <img src="imgJourney/abu-simbel.jpg" alt="Image">
                <img src="imgJourney/philla.jpg" alt="Image">
            </div>
            <div class="tm-slideshow-description tm-bg-primary">
                <h2 class="">Tempel</h2>
                <p>Donec nec laoreet diam, at vehicula ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nec dapibus nunc, quis viverra metus. Morbi eget diam gravida, euismod magna vel, tempor urna.</p>
            </div>
        </section>
    </div>

    <div class="tm-container-outer" id="tm-section-3">
        <ul class="nav nav-pills tm-tabs-links">
            <li class="tm-tab-link-li">
                <a href="#1a" data-toggle="tab" class="tm-tab-link  active">

                    Aswan
                </a>
            </li>
            <li class="tm-tab-link-li">
                <a href="#2a" data-toggle="tab" class="tm-tab-link">

                    Abu Simbel
                </a>
            </li>
            <li class="tm-tab-link-li">
                <a href="#3a" data-toggle="tab" class="tm-tab-link">

                    Kom ombo
                </a>
            </li>
            <li class="tm-tab-link-li">
                <a href="#4a" data-toggle="tab" class="tm-tab-link"><!-- Current Active Tab -->

                    Adfo
                </a>
            </li>

        </ul>
        <div class="tab-content clearfix">

            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="1a">
                <div class="tm-recommended-place-wrap">
                    <div class="tm-recommended-place">
                        <img src="images/zhz.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Philla Tempel</h3>
{{--                            <p class="tm-text-highlight">One North</p>--}}
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$110</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="images/zaz.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">saloga and gazel</h3>
{{--                            <p class="tm-text-highlight">Two North</p>--}}
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <div id="preload-hover-img"></div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$120</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="images/zyz.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Nile trip</h3>
{{--                            <p class="tm-text-highlight">Three North</p>--}}
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$130</p>
                        </a>
                    </div>
                    <div class="tm-recommended-place">
                        <img src="images/zfz.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">nubian museum</h3>
{{--                            <p class="tm-text-highlight">Four North</p>--}}
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$140</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/zxzx.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Aswan museum</h3>
{{--                            <p class="tm-text-highlight">Four North</p>--}}
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$140</p>
                        </a>
                    </div>
                    <div class="tm-recommended-place">
                        <img src="imgJourney/zlz.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Philla tempel</h3>
{{--                            <p class="tm-text-highlight">Four North</p>--}}
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$140</p>
                        </a>
                    </div>


                </div>

            </div> <!-- tab-pane -->

            <!-- Tab 2 -->
            <div class="tab-pane fade" id="2a">

                <div class="tm-recommended-place-wrap">
                    <div class="tm-recommended-place">
                        <img src="imgJourney/abusimbel.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Abu Simbel</h3>
{{--                            <p class="tm-text-highlight">South One</p>--}}
                            <p class="tm-text-gray">Abu Simbel is in southern Egypt, not far from the border with Sudan. It is administratively part of the Aswan Governorate. The Sudanese border is only about 20 kilometers away to the southwest; the border departs from the 22nd parallel here and forms the Wadi Halfa Salient. However, the course of the border is disputed; Egypt claims the territory of the Wadi Halfa Salient up to the 22nd parallel in the south.</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$220</p>
                        </a>
                    </div>




                </div>


            </div> <!-- tab-pane -->

            <!-- Tab 3 -->
            <div class="tab-pane fade" id="3a">

                <div class="tm-recommended-place-wrap">
                    <div class="tm-recommended-place">
                        <img src="images/zkz.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Tempel of Kom ambo</h3>
{{--                            <p class="tm-text-highlight">Venecia, Italy</p>--}}
                            <p class="tm-text-gray"> The Temple of Kom Ombo is an unusual double temple in the town of Kom Ombo in Aswan Governorate, Upper Egypt. It was constructed during the Ptolemaic dynasty, 180–47 BC.[1] Some additions to it were later made during the Roman period.</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$330</p>
                        </a>
                    </div>


                </div>


            </div> <!-- tab-pane -->

            <!-- Tab 4 -->
            <div class="tab-pane fade" id="4a">
                <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                <div class="tm-recommended-place-wrap">
                    <div class="tm-recommended-place">
                        <img src="images/zbzb.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Tempel of Edfu</h3>
{{--                            <p class="tm-text-highlight">Singapore</p>--}}
                            <p class="tm-text-gray">The Temple of Edfu is an Egyptian temple located on the west bank of the Nile in Edfu, Upper Egypt. The city was known in the Hellenistic period as Koinē Greek: Ἀπόλλωνος πόλις and Latin Apollonopolis Magna, after the chief god Horus, who was identified as Apollo under the interpretatio graeca.[1] It is one of the best preserved shrines in Egypt.</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$440</p>
                        </a>
                    </div>


                </div>


            </div> <!-- tab-pane -->

            <!-- Tab 6 -->
            <div class="tab-pane fade" id="6a">

                <div class="tm-recommended-place-wrap">
                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Hotel Australia</h3>
                            <p class="tm-text-highlight">City One</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$660</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                            <p class="tm-text-highlight">City Two</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$650</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Beach Barbecue Sunset</h3>
                            <p class="tm-text-highlight">City Three</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$640</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                            <p class="tm-text-highlight">City Four</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$630</p>
                        </a>
                    </div>
                </div>

            </div> <!-- tab-pane -->

            <!-- Tab 7 -->
            <div class="tab-pane fade" id="7a">

                <div class="tm-recommended-place-wrap">
                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Antartica Resort</h3>
                            <p class="tm-text-highlight">Ant City One</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$770</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Pulvinar Semper</h3>
                            <p class="tm-text-highlight">Ant City Two</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$230</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Cras vel sapien</h3>
                            <p class="tm-text-highlight">Ant City Three</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$140</p>
                        </a>
                    </div>

                    <div class="tm-recommended-place">
                        <img src="imgJourney/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                        <div class="tm-recommended-description-box">
                            <h3 class="tm-recommended-title">Nullam eget est</h3>
                            <p class="tm-text-highlight">Ant City Four</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                        </div>
                        <a href="#" class="tm-recommended-price-box">
                            <p class="tm-recommended-price">$190</p>
                        </a>
                    </div>
                </div>

            </div> <!-- tab-pane -->
        </div>
    </div>

@endsection
