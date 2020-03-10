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
    <h2  style="color:blue">Edit Room</h2>
    <br>

    <form  action="/editRoom/{{$room->id}}/updateRoom"  method="post">
        @csrf
        <div class="form-group">
            <label>No Of Room</label>
            <input type="text" class="form-control" name="no_of_room"  value="{{$room->No_of_room}}" id="no_of_room">
        </div>
        <div class="form-group">
            <label>Type Of Room</label>
            <input type="text" class="form-control" name="type"  value="{{$room->type}}" id="type">
        </div>
        <div class="form-group">
            <label>Price Of Room</label>
            <input type="text" class="form-control" name="Price"  value="{{$room->Price}}" id="Price">
        </div>

        <button type="submit" class="btn btn-primary">Update Room</button>

    </form>

<br><br>
    <a class="btn btn-primary" href="/roomTable" class="btn btn-primary">Return To Room Table</a>

</div>




{{--    <table class="table  border-light">--}}
{{--        <thead class="thead-dark">--}}
{{--        <tr>--}}
{{--            <th>No Of Room</th>--}}
{{--            <th>Type of Room</th>--}}
{{--            <th>Price</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <td>{{$room->No_of_room}}</td>--}}
{{--        <td>{{$room->type}}</td>--}}
{{--        <td>{{$room->Price}}</td>--}}
{{--        </tbody>--}}
{{--    </table>--}}






















</body>
</html>
