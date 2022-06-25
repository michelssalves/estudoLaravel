<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> About (view)</h3>
    <ul>
        <li>
            <a href="{{ route('site.index') }}">Main Menu</a>
        </li>
       <li>
            <a href="{{ route('site.about') }}">About Us</a>
        </li>
        <li>
            <a href="{{ route('site.contact') }}">Contact Us</a>
        </li>
    </ul>
</body>
</html>