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
    <h2  style="color:blue">Addg a Journey</h2>
    <br>

    <form  action="/journeyTable"  method="post">
        @csrf

        <div class="form-group">
            <label>Name Of Trip</label>
            <input type="text" class="form-control" name="Name_of_trip"  value="" id="Name_of_trip">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="Price"  value="" id="Price">
        </div>


        <button type="submit" class="btn btn-primary">Add a Journey</button>

    </form>

    <br><br>
    <a class="btn btn-primary" href="/journeyTable" class="btn btn-primary">Return To Journey Table</a>
    <br><br>
    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>

</div>






</body>
</html>
