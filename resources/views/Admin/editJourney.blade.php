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
    <h2  style="color:blue">Edit Journey Table</h2>
    <br>

    <form  action="/editJourney/{{$trip->id}}/updateJourney"  method="post">
        @csrf

        <div class="form-group">
            <label>Name Of Trip</label>
            <input type="text" class="form-control" name="Name_of_trip"  value="{{$trip->Name_of_trip}}" id="Name_of_trip">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="Price"  value="{{$trip->Price}}" id="Price">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>

    </form>

    <br><br>
    <a class="btn btn-primary" href="/journeyTable" class="btn btn-primary">Return To Journey Table</a>

    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>


</div>

</body>
</html>
