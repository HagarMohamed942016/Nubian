@extends('master')

@section('content')

    <head>
        <title>Welcome To Our Hotel</title>
        <link rel="stylesheet" type="text/css" href="css/checkTable.css">
    </head>


    <div class="checkTable">

        <img src="imgRestaurant/food.jpg">
        <div class="loginbox">
            <img src="imgRestaurant/avatar.png" class="avatar">
            <h1>WELCOME</h1>
            <form action="/" method="post">
                @csrf

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <p>Email</p>
                        <label>{{$restaurant->email}}</label>
{{--                        <input type="text" name="" placeholder="{{$restaurant->email}}">--}}
                    </div>
                    <div class="col-sm-6">
                        <p>Phone</p>
                        <label>{{$customer->phone}}</label>
{{--                        <input type="text" name="" placeholder="{{$restaurant->phone}}">--}}
                    </div>
                </div>

                <br>

                <div class="row">

                    <div class="col-sm-6">
                        <p>Date</p>
                        <label>{{$restaurant->date}}</label>
{{--                        <input type="" name="" placeholder="{{$restaurant->date}}">--}}
                    </div>

                    <div class="col-sm-6">
                        <p>Time</p>
                        <label>{{$restaurant->time}}</label>
{{--                        <input type="" name="" placeholder="{{$restaurant->time}}">--}}
                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col-sm-6">
                        <p>Drinks</p>
                        <label>{{$restaurant->Drinks}}</label>
                        {{--                        <input type="" name="" placeholder="{{$restaurant->No_of_person}}">--}}
                    </div>
                    <div class="col-sm-6">
                        <p>Foods</p>
                        <label>{{$restaurant->Foods}}</label>
                        {{--                        <input type="" name="" placeholder="{{$restaurant->total_price}}">--}}
                    </div>

                </div>
                <br>

                <div class="row">

                    <div class="col-sm-6">
                        <p>Number Of Person</p>
                        <label>{{$restaurant->No_of_person}}</label>
{{--                        <input type="" name="" placeholder="{{$restaurant->No_of_person}}">--}}
                    </div>
                    <div class="col-sm-6">
                        <p>Total Price</p>
                        <label>{{$restaurant->total_price}}</label>
{{--                        <input type="" name="" placeholder="{{$restaurant->total_price}}">--}}
                    </div>

                </div>
                <br>

                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <a class="btn btn-danger" href="/deleteReservationTable/{{$restaurant->id}}">Cancel</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="/" class="btn btn-success">OK</a>
                    </div>
                </div>

            </form>

        </div>
    </div>





@endsection
