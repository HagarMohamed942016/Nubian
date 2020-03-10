<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant Reservation</title>
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
    <h2  style="color:blue">Restaurant Reservation Table</h2>
    <br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>No Of Person</th>
            <th>Drinks</th>
            <th>Foods</th>
            <th>Total Price</th>

        </tr>
        </thead>
{{--        <tbody>--}}
        @foreach($customers as $customer)

         @foreach($restaurants as $restaurant)
                        <tbody>
            <tr>
                <td>{{$restaurant->email}}</td>
                <td>{{$customer->phone}}</td>

                <td>{{$restaurant->date}}</td>
                <td>{{$restaurant->time}}</td>
                <td>{{$restaurant->No_of_person}}</td>
                <td>{{$restaurant->Drinks}}</td>
                <td>{{$restaurant->Foods}}</td>
                <td>{{$restaurant->total_price}}</td>

            </tr>
                        </tbody>
            @endforeach

        @endforeach

{{--        </tbody>--}}
    </table>


</div>

</body>
</html>
