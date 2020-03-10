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
    <h2  style="color:blue">Create Room</h2>
    <br>

    <form  action="/roomTable"  method="post">
        @csrf
        <div class="form-group">
            <label>No Of Room</label>
            <input type="text" class="form-control" name="no_of_room"  value="" id="no_of_room">
        </div>
        <div class="form-group">
            <label>Type Of Room</label>
            <input type="text" class="form-control" name="type"  value="" id="type">
        </div>
        <div class="form-group">
            <label>Price Of Room</label>
            <input type="text" class="form-control" name="Price"  value="" id="Price">
        </div>

        <button type="submit" class="btn btn-primary">Create Room</button>

    </form>

    <br><br>
    
        <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>


</div>



</body>
</html>
