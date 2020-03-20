<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey Reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br>
    <h2  style="color:blue">Journey Reservation Table</h2>
    <br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
            <th>Email</th>
            <th>Name Of Trip</th>
            <th>Journey Id</th>
            <th>Date</th>
            <th>No Of Person</th>
            <th>Total Price</th>

        </tr>
        </thead>
        {{--        <tbody>--}}
        @foreach($customers as $customer)

            @foreach($trips as $trip)
                <tbody>
                <tr>
                    <td>{{$trip->email}}</td>
                    <td>{{$trip->Name_of_trip}}</td>
                    <td>{{$trip->journey_id}}</td>
                    <td>{{$trip->date}}</td>
                    <td>{{$trip->No_of_person}}</td>
                    <td>{{$trip->total_price}}</td>

                </tr>
                </tbody>
            @endforeach

        @endforeach

        {{--        </tbody>--}}
    </table>

    <br><br>
    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>
    <br><br>

</div>

</body>
</html>
