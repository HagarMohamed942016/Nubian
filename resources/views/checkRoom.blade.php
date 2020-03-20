@extends('master')

@section('content')


<head>
    <title>Welcome To Our Restaurant</title>
    <link rel="stylesheet" type="text/css" href="css/checkTable.css">
</head>


<div class="checkTable">
    <img src="imgJourney/abu-simbel1.jpg">
<div class="loginbox">
    <img src="imgRestaurant/avatar.png" class="avatar">
    <h1>WELCOME</h1>
    <form>

                <br>
                <p>Email</p>
{{--                <label>{{$reservation->email}}</label>--}}
                <input type="text" name="" placeholder="{{$reservation->email}}">

                <div class="row">

                    <div class="col-sm-6">
                        <p>Check In</p>
{{--                        <label>{{$reservation->check_in}}</label>--}}
                        <input type="" name="" placeholder="{{$reservation->check_in}}">
                    </div>

                    <div class="col-sm-6">
                        <p>Check Out</p>
{{--                        <label>{{$reservation->check_out}}</label>--}}
                        <input type="" name="" placeholder="{{$reservation->check_out}}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <p>Type Of Room</p>
{{--                        <label>{{$reservation->type}}</label>--}}
                        <input type="" name="" placeholder="{{$reservation->type}}">
                    </div>
                    <div class="col-sm-6">
                        <p>Number Of Room</p>
{{--                        <label>{{$reservation->No_of_room}}</label>--}}
                        <input type="" name="" placeholder="{{$reservation->No_of_room}}">
                    </div>

                </div>

                <p>Total Price</p>
{{--                <label>{{$reservation->total_price}}</label>--}}
                <input type="" name="" placeholder="{{$reservation->total_price}}">

{{--<label></label>--}}

                <br>

        <a class="btn btn-danger" href="/deleteReservation/{{$reservation->id}}">Cancel</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="/index">OK</a>
{{--                <input type="submit" name="" value="Cancel">--}}
{{--                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                <input type="submit" name="" value="OK">--}}

            </form>


</div>
</div>











@endsection
