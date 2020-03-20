<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/Mynav.css">

    <link rel="stylesheet" href="css/linearicons.css" type="text/css">
        <title>Nubian House</title>

</head>
<body>


@if($errors->any())
    <p style="color: red">{{$errors->first()}}</p>
@endif

<!--All-->
<div class="main">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="A">
        <a class="navbar-brand" href="#" style="font-family: Curlz MT;">Nubian</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/room">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/journey">Journey</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Dropdown--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="#">Action</a>--}}
{{--                        <a class="dropdown-item" href="#">Another action</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>


            <div class="login form-inline my-2 my-lg-0">

                @guest
                        <div class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                    @if (Route::has('register'))
                        &nbsp;&nbsp;&nbsp;
                        <div class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                    @endif
                @else
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    @if(auth()->user()->isAdmin())
                &nbsp;&nbsp;
                        <a href="/admin">Go To Tables</a>
                    @endif
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                    </div>
                @endguest




                &nbsp;&nbsp;&nbsp;&nbsp;

                <img src="image/placeholder.png" alt="">
                &nbsp;&nbsp;&nbsp;
                <span style="color: white">Gharb Suhail,<br/> Aswan ,Eg</span>

            </div>

        </div>
    </nav>
</div>
<!---->

@yield('content')



<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-logo">
                    <a href="#"  style="font-family: Curlz MT;">Nubian</a>
                </div><br>
            </div>
        </div>
        <div class="row pb-50">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h5>Location</h5>
                    <div class="widget-text">
{{--                        <i class="lnr lnr-map-marker"></i>--}}
                        <p>1525 Boring Lane, <br />Los Angeles, CA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h5>Reception</h5>
                    <div class="widget-text">
{{--                        <i class="lnr lnr-phone-handset"></i>--}}
                        <p>+1 (603)535-4592</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h5>Shuttle Service</h5>
                    <div class="widget-text">
{{--                        <i class="lnr lnr-phone-handset"></i>--}}
                        <p>+1 (603)535-4592</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h5>Restaurant</h5>
                    <div class="widget-text">
{{--                        <i class="lnr lnr-phone-handset"></i>--}}
                        <p>+1 (603)535-4592</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">


        </div>
    </div>
</footer>
<!-- Footer Section End -->




<script src="jsHotel/main.js"></script>





</body>
</html>
