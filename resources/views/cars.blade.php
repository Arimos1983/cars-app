<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <ul>
    @foreach($cars as $car)
    <li>
    {{ $car->title }}
    {{ $car->producer }}
    </li>
    @endforeach
    </ul>
</body>
</html>