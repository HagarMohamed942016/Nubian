@extends('master')

@section('content')

    <head>
        <title>Welcome To Our Hotel</title>
        <link rel="stylesheet" type="text/css" href="css/checkTable.css">
    </head>


    <div class="checkTable">

        <img src="imgHotel/sunset.jpg">
        <div class="loginbox">
            <img src="imgRestaurant/avatar.png" class="avatar">
            <h1>WELCOME</h1>
            <form action="/" method="post">
                @csrf

                <br>
                <p>Email</p>
                <input type="text" name="" placeholder="{{$trip->email}}">

                <div class="row">

                    <div class="col-sm-6">
                        <p>Name of Trip</p>
                        <input type="" name="" placeholder="{{$trip->Name_of_trip}}">
                    </div>

                    <div class="col-sm-6">
                        <p>Date</p>
                        <input type="" name="" placeholder="{{$trip->date}}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <p>Number Of Person</p>
                        <input type="" name="" placeholder="{{$trip->No_of_person}}">
                    </div>
                    <div class="col-sm-6">
                        <p>Total Price</p>
                        <input type="" name="" placeholder="{{$trip->total_price}}">
                    </div>

                </div>

{{--                <p>Total Price</p>--}}
{{--                <input type="" name="" placeholder="{{$trip->total_price}}">--}}

                {{--<label></label>--}}

                <br>
                <div class="row">
                    <div class="col-sm-6">
{{--                        <input type="submit" href="/deleteJourney/{{$trip->id}}" name="" value="Cancel">--}}
                        <a class="btn btn-danger" href="/deleteJourney/{{$trip->id}}">Cancel</a>
                    </div>
                    <div class="col-sm-6">
{{--                        <input type="button" class="btn btn-primary" name="" value="OK">--}}
                        <a href="/" class="btn btn-success">OK</a>
                    </div>
                </div>

            </form>

        </div>
    </div>





@endsection
