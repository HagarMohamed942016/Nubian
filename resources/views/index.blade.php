@extends('master')

@section('content')

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <script src="js2/jquery.min.js"></script>
        <!--start slider -->
        <link rel="stylesheet" href="css2/fwslider.css" media="all">
        <script src="js2/jquery-ui.min.js"></script>
        <script src="js2/css3-mediaqueries.js"></script>
        <script src="js2/fwslider.js"></script>
        <!--end slider -->
        <!---strat-date-piker---->
        <link rel="stylesheet" href="css2/jquery-ui.css" />
        <script src="js2/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#datepicker,#datepicker1" ).datepicker();
            });
        </script>



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
        <link rel="stylesheet" href="cssHotel/linearicons.css" type="text/css">
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


        {{-- select dynamic   --}}
        <script>

            $(document).ready(function(){

                $('.dynamic').change(function(){
                    if($(this).val() != '')
                    {
                        var select = $(this).attr("id");
                        var value = $(this).val();
                        var dependent = $(this).data('dependent');
                        console.log(select);
                        console.log(value);
                        console.log(dependent);

                        $.ajax({
                            url:"{{ route('fetch') }}",
                            method:"GET",
                            data:{select:select, value:value, dependent:dependent},
                            // dataType:'json',//return data will be json
                            success:function(result)
                            {
                                $('#No_of_room').html(result);
                            }

                        }),

                            $.ajax({
                                type:'get',
                                url:"{{route('findPrice')}}",
                                data:{'type':value},
                                dataType:'json',//return data will be json
                                success:function(data){
                                    console.log("price");
                                    var price = data.Price;
                                    console.log(price);

                                    console.log(data.Price);
                                    $('#Price').html(data.Price+' $');
                                },
                            });
                    }
                });

                // $('#type').change(function()
                // {
                //     $('#No_of_room').val('');
                //     $('#Price').val('');
                //     console.log("No.");
                //
                // });

            });

        </script>
        {{--end dynamic select--}}


    </head>



    <!-- Hero Slider Begin -->
    <!----start-images-slider---->
    <div class="images-slider">
        <!-- start slider -->
        <div id="fwslider">
            <div class="slider_container">
                <div class="slide">
                    <!-- Slide image -->
                    <img src="images/nooob.jpg" alt=""/>
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h4 class="title"><i class="bg"></i>We hope you’ll enjoy <span class="hide">your stay.</span></h4>
                            <h5 class="title1"><i class="bg"></i>your stay <span class="hide" >condimentum accumsan</span></h5>
                            <!-- /Text title -->
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class="slide">
                    <img src="images/slider-bg.jpg" alt=""/>
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h4 class="title"><i class="bg"></i>Opportunity rarely comes twice</h4>
                            <h5 class="title1"><i class="bg"></i>Take advantage of it well <span class="hide"></span> </h5>
                            <!-- /Text title -->
                        </div>

                    </div>

                </div>
                <!--/slide -->
            </div>
            <div class="timers"> </div>
            <div class="slidePrev"><span> </span></div>
            <div class="slideNext"><span> </span></div>
        </div>
        <!--/slider -->
    </div>




    <!-- Room Availability Section Begin -->
    <section class="room-availability spad">
        <div class="container">
            <div class="room-check">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="imgHotel/anakato61.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="imgHotel/bnb55.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="imgHotel/vvv.jpg" alt="">
                                </div>
                            </div>
                            <br><br>
                            <div class="room-text">
                                <div class="room-title">
                                    <h2>Suite</h2>
                                    <div class="room-price">
                                        <span>From</span>
                                        <h2>$252</h2>
                                    </div>
                                </div>
                                <br>
                                <div class="room-features">
                                    <div class="room-info">
                                        <i class="flaticon-019-television"></i>
                                        <span>Smart TV</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-029-wifi"></i>
                                        <span>High Wi-fii</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-003-air-conditioner"></i>
                                        <span>AC</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-036-parking"></i>
                                        <span>Parking</span>
                                    </div>
                                    <div class="room-info last">
                                        <i class="flaticon-007-swimming-pool"></i>
                                        <span>Pool</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="check-form">
                            <h2>Check Availability</h2>

                            <form action="/indexR" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name</label>
                                        <input type="text" name="name" class="select"  value="" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email</label>
                                        <input type="text" name="email" class="select"  value="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Country</label>
                                        <input type="text" name="country" class="select"  value="" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="select"  value="" required>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>From</label>
                                        <input type="date" class="select" name="check_in" value="dd / mm / yyyy" required>
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>To</label><br>
                                        <input type="date" class="select" name="check_out" value="dd / mm / yyyy" required>
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Type of Room</label>
                                        <select class="custom-select dynamic" style="border: 0;border-bottom: 1px solid #888888;" id="type" name="type"  value="{{old('type')}}" data-dependent="No_of_room"  required>
                                                <option>Select Type Of Room</option>
                                                @foreach($rooms as $room)
                                                    <option value="{{ $room->type}}">{{ $room->type }}</option>
                                                @endforeach

                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Price</label><br>
                                        <label id="Price"  class="Price"  name="Price"  value="{{old('Price')}}">$</label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Number of Room</label>
                                        <select  id="No_of_room"  name="No_of_room"  value="{{old('No_of_room')}}"  required class="custom-select" style="border: 0;border-bottom: 1px solid #888888;"  required>
                                            <option>Select No. Of Room</option>
                                        </select>

                                        <!-- </div> -->

                                    </div>

                                </div>

<br><br>

                                {{--                                <div class="datepicker">--}}
{{--                                    <div class="date-select">--}}
{{--                                        <p>Name</p>--}}
{{--                                        <input type="text"  id="name" name="name"  value="{{old('name')}}"  required>--}}
{{--                                    </div>--}}
{{--                                    <div class="date-select to">--}}
{{--                                        <p>Email</p>--}}
{{--                                        <input type="text"  id="email" name="email"  value="{{old('email')}}"  required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="datepicker">--}}
{{--                                    <div class="date-select">--}}
{{--                                        <p>Country</p>--}}
{{--                                        <input type="text"  id="country" name="country"  value="{{old('country')}}"  required>--}}
{{--                                    </div>--}}
{{--                                    <div class="date-select to">--}}
{{--                                        <p>Phone</p>--}}
{{--                                        <input type="text"  id="phone" name="phone"  value="{{old('phone')}}"  required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="datepicker">--}}
{{--                                    <div class="date-select">--}}
{{--                                        <p>From</p>--}}
{{--                                        <input type="date"  name="check_in" value="{{old('check_in')}}"  required>--}}
{{--                                        <img src="imgHotel/calendar.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="date-select to">--}}
{{--                                        <p>To</p>--}}
{{--                                        <input type="date"  name="check_out" value="{{old('check_out')}}" required>--}}
{{--                                        <img src="imgHotel/calendar.png" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="room-selector">--}}
{{--                                            <p>Type Of Room</p>--}}
{{--                                            <select class="  dynamic"  id="type" name="type"  value="{{old('type')}}" data-dependent="No_of_room"  required>--}}
{{--                                                <option>Select Type Of Room</option>--}}
{{--                                                @foreach($rooms as $room)--}}
{{--                                                    <option value="{{ $room->type}}">{{ $room->type }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="room-quantity">--}}
{{--                                            <div class="single-quantity">--}}
{{--                                                <p>Price</p>--}}
{{--                                                <div class="H"><label  id="Price"  class="Price"  name="Price"  value="{{old('Price')}}">$</label></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}



{{--                                <div class="room-selector">--}}
{{--                                    <p>Number Of Room</p>--}}
{{--                                    <select class=""  id="No_of_room"  name="No_of_room"  value="{{old('No_of_room')}}"  required>--}}
{{--                                        <option>Select No. Of Room</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                @if($errors->any())
                                    <p style="color: red">{{$errors->first()}}</p>
                                @endif

                                <button type="submit"  id="submit" name="submit">CHECK Availability <i class="lnr lnr-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-room">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>“Customers may forget what you said  but they will never forget how you made themfeel”.</h2>
                    </div>
                </div>
                <div class="about-para">
                    <div class="row">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Availability Section End -->

    <!-- Facilities Section Begin -->
    <div class="facilities-section spad">
        <div class="container">
            <div class="facilities-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h1>Facilities</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="imgHotel/facilities-1.jpg"></div>
                    </div>
                    <div class="col-lg-6 p-0 ">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Wellness Center</h2>
                                <p>Where in the hotel there is a section for wellness, rest and recovery, and there is also a section for massage.</p>
                                <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Wellness Center</h2>
                                <p>There are also many recreational facilities in harmony with the picturesque nature and sunny atmosphere.</p>
                                <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1">
                        <div class="facilities-img set-bg" data-setbg="imgHotel/anakato.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Section End -->

    <div class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1>Guestbook</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-item">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="testimonial-1" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It</h4>
                                    <p>There, I spent the most beautiful days,
                                        in terms of the Nubian style and the pleasant atmosphere of Aswan,
                                        especially in the winter and the picturesque nature
                                        and good treatment of the people of the city.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="testimonial-2" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It</h4>
                                    <p>We stayed here for 3 nights and i was very sad to leave,
                                        it was a totally relaxing place with helpful and friendly people,
                                        I would love to return agian.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="testimonial-3" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It</h4>
                                    <p>With a perfect location overseeing the nile river from above a cliff ,
                                        to a perfect setting with the Nobian architecture with it is ambiance,
                                        to the perfect weather with a nice breeze ,
                                        to the perfect food with the perfect mix of herbs in very good portions ,
                                        to the perfect service and hospitality ,
                                        this is where should you go.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-author-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-toggle="tab" href="#testimonial-1" role="tab" class="show active">
                                    <div class="author-pic">
                                        <img src="imgHotel/testimonial/author-1.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>Adam Nelson <span>USA</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#testimonial-2" role="tab">
                                    <div class="author-pic">
                                        <img src="imgHotel/testimonial/author-2.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>Mina Nabil <span>Alexandria,Egypt</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#testimonial-3" role="tab">
                                    <div class="author-pic">
                                        <img src="imgHotel/testimonial/author-3.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Follow Instagram Section Begin -->
    <section class="follow-instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow us on Instagram @Nubian-House</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Instagram Section End -->

    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="imgHotel/cvc.jpg" alt="">
                <img src="imgHotel/cvv.jpg" alt="">
                <img src="imgHotel/zxx.jpg" alt="">
                <img src="imgHotel/zzz.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Footer Room Pic Section End -->

@endsection
