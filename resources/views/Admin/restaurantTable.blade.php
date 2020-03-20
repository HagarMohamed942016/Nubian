<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant Table</title>
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
    <h2  style="color:blue">Restaurant Table</h2>
    <br>
    <a class="btn btn-outline-info"   href="/createRestaurant">Create Table For Restaurant</a>
<br><br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
{{--            <th>No Of Table</th>--}}
            <th>Drinks</th>
            <th>Price of Drinks</th>
            <th>Foods</th>
            <th>Price of Foods</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        {{--     ///////no   <tbody>--}}
        @foreach($restaurants as $restaurant)
            <tbody>
            <tr>
{{--                <td>{{$restaurant->No_of_table}}</td>--}}
                <td>{{$restaurant->Drinks}}</td>
                <td>{{$restaurant->Price_of_drinks}}</td>
                <td>{{$restaurant->Foods}}</td>
                <td>{{$restaurant->Price_of_foods}}</td>
                <td><a class="btn btn-primary" href="/restaurantTable/{{$restaurant->id}}">show</a></td>
                <td><a class="btn btn-success" href="/editRestaurant/{{$restaurant->id}}">Edit</a></td>
                <td><a class="btn btn-danger" href="/deleteRestaurant/{{$restaurant->id}}">Delete</a></td>

                {{--       style="margin-left:20px;color: #6f42c1;"         <td>{{$restaurant->Drinks}}</td>--}}
                {{--                <td>{{$restaurant->Foods}}</td>--}}

            </tr>
            </tbody>

        @endforeach

        {{--   //////no     </tbody>--}}
    </table>


    <br><br>
    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>
    <br><br>

</div>

</body>
</html>
