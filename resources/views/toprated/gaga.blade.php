<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Top rated games</h1>
    <ol>
    @foreach ($toprated as $movie)
        <li> {{ $movie->name }} : {{ $movie->rating }} </li>    
    @endforeach
    </ol>
</body>
</html>