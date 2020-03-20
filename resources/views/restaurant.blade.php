@extends('master')

@section('content')

    <head>
        <meta name="description" content="Free Template by Free-Template.co" />
        <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="Free-Template.co" />

        <title>Nubian House</title>



        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="cssRestaurant/bootstrap.min.css">
        <link rel="stylesheet" href="cssRestaurant/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="cssRestaurant/animate.css">

        <link rel="stylesheet" href="cssRestaurant/owl.carousel.min.css">
        <link rel="stylesheet" href="cssRestaurant/owl.theme.default.min.css">
        <link rel="stylesheet" href="cssRestaurant/magnific-popup.css">

        <link rel="stylesheet" href="cssRestaurant/bootstrap-datepicker.css">
        <link rel="stylesheet" href="cssRestaurant/jquery.timepicker.css">

        <link rel="stylesheet" href="cssRestaurant/icomoon.css">
        <link rel="stylesheet" href="cssRestaurant/style.css">



        <script src="jsRestaurant/jquery.min.js"></script>
        <script src="jsRestaurant/popper.min.js"></script>
        <script src="jsRestaurant/bootstrap.min.js"></script>
        <script src="jsRestaurant/jquery.easing.1.3.js"></script>
        <script src="jsRestaurant/jquery.waypoints.min.js"></script>
        <script src="jsRestaurant/owl.carousel.min.js"></script>
        <script src="jsRestaurant/jquery.magnific-popup.min.js"></script>

        <script src="jsRestaurant/bootstrap-datepicker.js"></script>
        <script src="jsRestaurant/jquery.timepicker.min.js"></script>

        <script src="jsRestaurant/jquery.animateNumber.min.js"></script>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="jsRestaurant/google-map.js"></script>

        <script src="jsRestaurant/main.js"></script>


        {{-- link for form book table       --}}
        <script>


            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })

            // $('#exampleModal').on('show.bs.modal', function (event) {
            //     var button = $(event.relatedTarget) // Button that triggered the modal
            //     var recipient = button.data('whatever') // Extract info from data-* attributes
            //     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            //     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            //     var modal = $(this)
            //     modal.find('.modal-title').text('New message to ' + recipient)
            //     modal.find('.modal-body input').val(recipient)
            // })

        </script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        {{--end link        --}}


    </head>

    {{--section    --}}
    <section class="ftco-cover" style="background-image: url(imgRestaurant/bg_3.jpg);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                <div class="col-md-12">
                    <h3 class="ftco-heading ftco-animate mb-3">Welcome To Our Restaurant</h3>


                  <br>
                    <p><a href="https://free-template.co/" class="btn btn-outline-white btn-lg ftco-animate H" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Reservation</a></p>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Book a Table</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                </div>
                                <div class="modal-body">
                                    <form  action="/table"  method="post">
                                        @csrf

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group" style="text-align: left;color: #000000;">
                                                    <label  class="control-label">Email</label>
                                                    <input type="text" name="email" class="form-control" id="recipient-name"  value="{{old('email')}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group" style="text-align: left;color: #000000;">
                                                    <label  class="control-label">Phone</label>
                                                    <input type="text" name="phone" class="form-control" id="recipient-name"  value="{{old('phone')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group" style="text-align: left;color: #000000;">
                                                    <label  class="control-label">Date</label>
                                                    <input type="date" name="date" class="form-control" id="recipient-name"  value="{{old('date')}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group" style="text-align: left;color: #000000;">
                                                    <label  class="control-label">Time</label>
                                                    <input type="time" name="time" class="form-control" id="recipient-name"  value="{{old('time')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group" style="text-align: left;color: #000000;">
                                                    <label  class="control-label">Select Your Drink</label>
                                                    <select name="Drinks" class="form-control"  value="{{old('Drinks')}}">
                                                        <option>Select your drink</option>
                                                        @foreach($restaurant as $meal)
                                                            <option value="{{$meal->Drinks}}">{{$meal->Drinks}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group" style="text-align: left;color: #000000;">
                                                    <label  class="control-label">Select Your Food</label>
                                                    <select name="Foods" class="form-control"  value="{{old('Foods')}}">
                                                        <option>Select your food</option>
                                                        @foreach($restaurant as $meal)
                                                            <option value="{{$meal->Foods}}">{{$meal->Foods}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group" style="text-align: left;color: #000000;">
                                            <label  class="control-label">Number of Person</label>
                                            <select name="No_of_person" class="form-control"  value="{{old('No_of_person')}}"  required>
                                                <option>Select No. of Person</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>more than 4</option>
                                            </select>

                                        </div>

                                        @if($errors->any())
                                            <p style="color: red">{{$errors->first()}}</p>
                                        @endif

                                        <button type="submit" class="btn btn-primary">Book Now</button>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    {{-- section   --}}
    <section class="ftco-section" id="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="display-4">Our Menu</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead"> We have different types of food from all over the world, but what really distinguish us is the beautiful Nobian Food.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">

                    <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item ftco-animate">
                            <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
                        </li>
                        <li class="nav-item ftco-animate">
                            <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
                        </li>
                        <li class="nav-item ftco-animate">
                            <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
                        </li>
                    </ul>

                    <div class="tab-content text-left">
                        <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                            <div class="row">
                                <div class="col-md-6 ftco-animate">
                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/images (4).jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/images (21).jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$24.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/images (22)1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$14.50</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ftco-animate">
                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/food1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$12.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/food2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$18.50</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                            <div class="row">
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/asd.jpeg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$14.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/azz.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$24.50</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$18.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/fish.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/ads.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$12.50</h6>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                            <div class="row">
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/offer_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$24.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/asdf.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$14.50</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$18.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="imgRestaurant/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$12.50</h6>
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
    <!-- END section -->

    <section class="ftco-section bg-light" id="section-news">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="display-4">News &amp; Events</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                        <img src="imgRestaurant/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                        <div class="media-body p-md-5 p-4">
                            <h5 class="mt-0 h4">In Taste Restaurant</h5>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                        <img src="imgRestaurant/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                        <div class="media-body p-md-5 p-4">
                            <h5 class="mt-0 h4">Chef Special Menu</h5>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                        <img src="imgRestaurant/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                        <div class="media-body p-md-5 p-4">
                            <h5 class="mt-0 h4">Merriage Celebrations</h5>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section" id="section-gallery">
        <div class="container">
            <div class="row ftco-custom-gutters">

                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="display-4">Food Gallery</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <a href="imgRestaurant/menu_1.jpg" class="ftco-thumbnail image-popup">
                        <img src="imgRestaurant/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="imgRestaurant/menu_2.jpg" class="ftco-thumbnail image-popup">
                        <img src="imgRestaurant/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="imgRestaurant/menu_3.jpg" class="ftco-thumbnail image-popup">
                        <img src="imgRestaurant/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4 ftco-animate">
                    <a href="imgRestaurant/menu_2.jpg" class="ftco-thumbnail image-popup">
                        <img src="imgRestaurant/fish1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="imgRestaurant/menu_3.jpg" class="ftco-thumbnail image-popup">
                        <img src="imgRestaurant/vbnm.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="imgRestaurant/menu_1.jpg" class="ftco-thumbnail image-popup">
                        <img src="imgRestaurant/asd.jpeg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- END section -->


    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
                        <div class="col-lg-8 p-5">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <small>CLOSE </small><span aria-hidden="true">&times;</span>
                            </button>
                            <h1 class="mb-4">Reserve A Table</h1>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_fname">First Name</label>
                                        <input type="text" class="form-control" id="m_fname">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_lname">Last Name</label>
                                        <input type="text" class="form-control" id="m_lname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="m_email">Email</label>
                                        <input type="email" class="form-control" id="m_email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_people">How Many People</label>
                                        <select name="" id="m_people" class="form-control">
                                            <option value="1">1 People</option>
                                            <option value="2">2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4+">4+ People</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_phone">Phone</label>
                                        <input type="text" class="form-control" id="m_phone">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_date">Date</label>
                                        <input type="text" class="form-control" id="m_date">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_time">Time</label>
                                        <input type="text" class="form-control" id="m_time">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="m_message">Message</label>
                                        <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- END Modal -->



@endsection
