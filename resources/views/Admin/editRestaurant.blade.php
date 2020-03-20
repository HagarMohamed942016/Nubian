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
    <h2  style="color:blue">Edit Drinks and Foods For Menu</h2>
    <br>

    <form  action="/editRestaurant/{{$restaurant->id}}/updateRestaurant"  method="post">
        @csrf

        <div class="form-group">
            <label>Drinks</label>
            <input type="text" class="form-control" name="Drinks"  value="{{$restaurant->Drinks}}" id="Drinks">
        </div>
        <div class="form-group">
            <label>Price Of Drinks</label>
            <input type="text" class="form-control" name="Price_of_drinks"  value="{{$restaurant->Price_of_drinks}}" id="Price_of_drinks">
        </div>
        <div class="form-group">
            <label>Foods</label>
            <input type="text" class="form-control" name="Foods"  value="{{$restaurant->Foods}}" id="Foods">
        </div>
        <div class="form-group">
            <label>Price Of Foods</label>
            <input type="text" class="form-control" name="Price_of_foods"  value="{{$restaurant->Price_of_foods}}" id="Price_of_foods">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

    <br><br>
    <a class="btn btn-primary" href="/restaurantTable" class="btn btn-primary">Return To Menu Table</a>

    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>


</div>

</body>
</html>
