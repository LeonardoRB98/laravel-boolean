

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Boolean</title>
</head>
<body>
    <h1>HOME</h1>
    @foreach ($cars as $car)
    <ul>
        <li>
            <h2>{{ $car->model }}</h2>
            <p>{{ $car->brand }}</p>
            <p>{{ $car->plate }}</p>
            <hr>
        </li>
    </ul>

    @endforeach
</body>
</html>