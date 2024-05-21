<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<h1>Hello World</h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                <a href="{{ route('info') }}">Info</a>
                </li>
                <li>
                <a href="{{ url('/date') }}">Today</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>