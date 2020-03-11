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
    <h2  style="color:blue">Create Table For Restaurant</h2>
    <br>

    <form  action="/restaurantTable"  method="post">
        @csrf
        
        <div class="form-group">
            <label>Drinks</label>
            <input type="text" class="form-control" name="Drinks"  value="" id="Drinks">
        </div>
        <div class="form-group">
            <label>Price Of Drink</label>
            <input type="text" class="form-control" name="Price_of_drinks"  value="" id="Price_of_drinks">
        </div>
        <div class="form-group">
            <label>Foods</label>
            <input type="text" class="form-control" name="Foods"  value="" id="Foods">
        </div>
        <div class="form-group">
            <label>Price Of Food</label>
            <input type="text" class="form-control" name="Price_of_foods"  value="" id="Price_of_foods">
        </div>

        <button type="submit" class="btn btn-primary">Create Table For Restaurant</button>

    </form>

    <br><br>
    <a class="btn btn-primary" href="/restaurantTable" class="btn btn-primary">Return To Restaurant Table</a>

</div>

        <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>





</body>
</html>
