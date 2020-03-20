<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey Table</title>
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
    <h2  style="color:blue">Journey Table</h2>
    <br>
    <a class="btn btn-outline-info"   href="/createJourney">Add a Journey</a>
    <br><br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
            {{--            <th>No Of Table</th>--}}
            <th>Name Of Trip</th>
            <th>Price</th>Restaurant
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        {{--     ///////no   <tbody>--}}
        @foreach($trips as $trip)
            <tbody>
            <tr>

                <td>{{$trip->Name_of_trip}}</td>
                <td>{{$trip->Price}}</td>
                <td><a class="btn btn-primary" href="/journeyTable/{{$trip->id}}">show</a></td>
                <td><a class="btn btn-success" href="/editJourney/{{$trip->id}}">Edit</a></td>
                <td><a class="btn btn-danger" href="/deleteJourney/{{$trip->id}}">Delete</a></td>


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
