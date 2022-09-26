<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel primi passi</title>
</head>
<body>
    <header style="display:flex; justify-content:space-between; background-color:green; align-items:center">
        <h3>
            <a style="color:greenyellow; padding:0 20px; text-decoration:none;" href="#">
                {{@$logo}}
            </a>
        </h3>
        <ul style="display:flex; list-style:none;">
            @foreach ($links as $link)
                <li>
                    <a style="text-decoration:none; color:greenyellow; padding:20px;" href="{{ route('aboutUs') }}">
                        {{$link}}
                    </a>
                </li>
            @endforeach
        </ul>
    </header>
</body>
</html>