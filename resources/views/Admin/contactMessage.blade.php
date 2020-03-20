<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Table</title>
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
    <h2  style="color:blue">Contact Table</h2>
    <br>
    <table class="table  border-light">
        <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>


        </tr>
        </thead>
        {{--        <tbody>--}}

            @foreach($contacts as $contact)
                <tbody>
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->message}}</td>
                </tr>
                </tbody>
            @endforeach

        {{--        </tbody>--}}
    </table>

    <br><br>
    <a class="btn btn-primary" href="/admin" class="btn btn-primary">Return To Admin Page</a>
    <br><br>

</div>

</body>
</html>
