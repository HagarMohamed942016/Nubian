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
    <h2  style="color:blue">Details of Table</h2>
    <br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>

            <th>Name_of_trip</th>
            <th>Price</th>

        </tr>
        </thead>
        <tbody>

        <td>{{$trip->Name_of_trip}}</td>
        <td>{{$trip->Price}}</td>

        </tbody>
    </table>

    <br>
    <a class="btn btn-primary" href="/journeyTable" class="btn btn-primary">Return To Journey Table</a>

    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>

</div>

</body>
</html>
