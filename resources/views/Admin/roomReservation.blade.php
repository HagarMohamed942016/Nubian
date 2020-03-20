<!DOCTYPE html>
<html lang="en">
<head>
    <title>Room Reservation</title>
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
    <h2  style="color:blue">Room Reservation Table</h2>
    <br>
{{--    <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>--}}
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
            <th>Email</th>
            <th>Country</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Type Of Room</th>
            <th>No Of Room</th>
            <th>Total Price</th>

        </tr>
        </thead>
{{--        <tbody>--}}
        @foreach($customers as $customer)
        @foreach($rooms as $room)
            <tbody>
        <tr>
            <td>{{$room->email}}</td>
            <td>{{$customer->country}}</td>
            <td>{{$room->check_in}}</td>
            <td>{{$room->check_out}}</td>
            <td>{{$room->type}}</td>
            <td>{{$room->No_of_room}}</td>
            <td>{{$room->total_price}}</td>
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
