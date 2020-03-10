<!DOCTYPE html>
<html lang="en">
<head>
    <title>Room Table</title>
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
    <h2  style="color:blue">Room Table</h2>
    <br>
        <a class="btn btn-outline-info"   href="/createRoom">Create Room</a>
    <br><br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
{{--            <th>Name</th>--}}
{{--            <th>Email</th>--}}
{{--            <th>Date</th>--}}
{{--            <th>Time</th>--}}
            <th>No Of Room</th>
            <th>Type of Room</th>
            <th>Price</th>
{{--            <th>Total Price</th>--}}
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        </thead>
        {{--        <tbody>--}}
        @foreach($rooms as $room)
            <tbody>
            <tr>
                <td>{{$room->No_of_room}}</td>
                <td>{{$room->type}}</td>
                <td>{{$room->Price}}</td>
{{--                <td>{{$room->check_in}}</td>--}}
{{--                <td>{{$room->check_out}}</td>--}}
{{--                <td>{{$room->type}}</td>--}}
{{--                <td>{{$room->room_No_of_room}}</td>--}}
{{--                <td>{{$room->total_price}}</td>--}}

                <td><a class="btn btn-primary" href="/roomTable/{{$room->id}}">show</a></td>
                <td><a class="btn btn-success" href="/editRoom/{{$room->id}}">Edit</a></td>
                <td><a class="btn btn-danger" href="/deleteRoom/{{$room->id}}">Delete</a></td>


            </tr>
            </tbody>

        @endforeach

        {{--        </tbody>--}}
    </table>


</div>

</body>
</html>
