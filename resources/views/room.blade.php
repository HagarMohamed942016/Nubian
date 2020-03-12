@extends('master')

@section('content')

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="Hotel Template">
        <meta name="keywords" content="Hotel, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Room -  Template</title>


        <!-- Css Styles -->
        <link rel="stylesheet" href="cssHotel/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="cssHotel/flaticon.css" type="text/css">
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
                            {{--type:'get',--}}
                            {{--url: "{{route('fetch')}}",--}}
                            data:{select:select, value:value, dependent:dependent},
                            success:function(result)
                            {
                                $('#'+dependent).html(result);
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
        {{--   end dynamic select--}}





    </head>

    <section class="hero-section set-bg" data-setbg="imgHotel/room/bbb.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <!--Shape of Rooms -->--}}
    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="imgHotel/room/rooms-1.jpg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="imgHotel/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Single Room</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h2>$99</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                    eget sapien ac, ultrices rhoncus ipsum.</p>
                            </div>
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
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="imgHotel/room/rooms-3.jpg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="imgHotel/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Double Room</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h2>$179</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                    eget sapien ac, ultrices rhoncus ipsum.</p>
                            </div>
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
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="imgHotel/room/rooms-4.jpeg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="imgHotel/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Suite </h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h2>$252</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                    eget sapien ac, ultrices rhoncus ipsum.</p>
                            </div>
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
            </div>

        </div>
        </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    {{--    <!--End shape -->--}}


    <!-- Room Availability Section Begin -->
    <section class="room-availability spad">
        <div class="container">
            <div class="room-check">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="check-form">
                            <h2>Check Availability</h2>
                            <form action="/roomR" method="post">
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



                            @if($errors->any())
                                    <p style="color: red">{{$errors->first()}}</p>
                                @endif

                                <button type="submit"  id="submit" name="submit">CHECK Availability <i class="lnr lnr-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>

                    {{--                    --}}
                    <div class="col-lg-6">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="imgHotel/dd3.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{--                    --}}

                </div>
            </div>

        </div>
    </section>
    <!-- Room Availability Section End -->


    {{--  Testtttt  <br><br>--}}

    {{--    <section class="probootstrap-section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row probootstrap-gutter40">--}}
    {{--                <div class="col-md-8">--}}
    {{--                    <h2 class="mt0">Reservation Form</h2>--}}
    {{--                    <form action="/reservation" method="post" class="probootstrap-form">--}}
    {{--                        @csrf--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="fname">Name</label>--}}
    {{--                                    <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}"  required>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="lname">Phone</label>--}}
    {{--                                    <input type="Phone" class="form-control" id="phone" name="phone"  value="{{old('phone')}}"  required>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}


    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="email">Email</label>--}}
    {{--                                    --}}{{--              <div class="form-field">--}}
    {{--                                    --}}{{--                <i class="icon icon-mail"></i>--}}
    {{--                                    <input type="email" class="form-control" id="email" name="email"  value="{{old('email')}}"  required>--}}
    {{--                                    --}}{{--              </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="fname">Country</label>--}}
    {{--                                    <input type="text" class="form-control" id="country" name="country"  value="{{old('country')}}"  required>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="date-arrival">Check In</label>--}}
    {{--                                    <div class="form-field">--}}
    {{--                                        <i class="icon icon-calendar2"></i>--}}
    {{--                                        <input type="date" class="form-control" id="date-arrival"  name="check_in" value="{{old('check_in')}}"  required>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="date-departure">Check Out</label>--}}
    {{--                                    <div class="form-field">--}}
    {{--                                        <i class="icon icon-calendar2"></i>--}}
    {{--                                        <input type="date" class="form-control" id="date-departure"  name="check_out" value="{{old('check_out')}}">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-30">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="adults">Type Of Room</label>--}}
    {{--                                    <div class="form-field">--}}
    {{--                                        <i class="icon icon-chevron-down"></i>--}}
    {{--                                        <select  id="type" class="form-control dynamic" name="type"  value="{{old('type')}}" data-dependent="No_of_room"  required>--}}
    {{--                                            <option value="">Select Type Of Room</option>--}}
    {{--                                            @foreach($rooms as $room)--}}
    {{--                                                <option value="{{ $room->type}}">{{ $room->type }}</option>--}}
    {{--                                            @endforeach--}}

    {{--                                        </select>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}


    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="children">Price Of Room</label>--}}
    {{--                                    --}}{{--                  <input type="text" class="form-control  Price"  id="Price"  name="Price"   value="{{old('Price')}}">--}}
    {{--                                    <label   id="Price"  class="form-control  Price"  name="Price"  value="{{old('Price')}}"></label>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group">--}}
    {{--                            <label for="children">Number Of Room</label>--}}
    {{--                            <div class="form-field">--}}
    {{--                                <i class="icon icon-chevron-down"></i>--}}
    {{--                                <select   id="No_of_room" class="form-control"  name="No_of_room"  value="{{old('No_of_room')}}"  required>--}}
    {{--                                    <option value="">Select No. Of Room</option>--}}
    {{--                                </select>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        @if($errors->any())--}}
    {{--                            <p style="color: red">{{$errors->first()}}</p>--}}
    {{--                        @endif--}}


    {{--                        <div class="form-group">--}}
    {{--                            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Reserve">--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <h2 class="mt0">Welcome To Nubian House</h2>--}}
    {{--                    <img src="imgHotel/ddd.jpg">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}





@endsection
