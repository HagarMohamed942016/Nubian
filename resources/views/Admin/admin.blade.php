<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Welcome Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        .body{
            background: url("img/boat.jpg");
            background-repeat: no-repeat;
        }

    </style>

</head>
<body>

{{--main_bg--}}

{{--<div class="container ">--}}
    <div  class="body">
{{--        <img src="img/boat.jpg" alt="">--}}

        <br><br>
    <div class="adminTables">
{{--        <img src="img/avatar.png" class="avatar">--}}
        &nbsp;&nbsp; <a class="btn btn-outline-info avatarAdmin" style="color:#fff;" href="/">Home</a>

    @if(auth()->user()->isAdmin())
{{--        <div class="loginbox">--}}
        <br><br>

{{--            &nbsp;&nbsp;   <a  class="btn btn-info" href="/user">Show Users Table</a>--}}
    <!-- <br><br> -->
        <!-- <a class="btn btn-info" href="/portfolioTable">Show Portfolios Table</a> -->
    <br><br>
         &nbsp;&nbsp;  <a class="btn btn-info" href="/roomTable">Show Room Table</a>
    <br><br>
        &nbsp;&nbsp; <a class="btn btn-info" href="/roomReservation">Show Room Reservation Table</a>
    <br><br>
        &nbsp;&nbsp;  <a class="btn btn-info" href="/restaurantTable">Show Restaurant Table</a>
    <br><br>
        &nbsp;&nbsp;  <a class="btn btn-info" href="/restaurantReservation">Show Restaurant Reservation Table</a>
    <br><br>
            &nbsp;
{{--        &nbsp;&nbsp;  <a class="btn btn-info" href="/restaurantReservation">Show Contact Table</a>--}}
            <br><br>
{{--        </div>--}}
@endif

        <br><br><br>
    </div>


    {{--    <div  class="main_bg">--}}
{{--        <img src="img/nile.jpg">--}}
{{--    </div>--}}


{{--</div>--}}
    </div>


</body>
</html>
