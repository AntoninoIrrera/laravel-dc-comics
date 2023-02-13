<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>show</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>

        <div class="card" style="width: 18rem;">
            <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$comic["series"]}}</h5>
                <h2>{{$comic["price"]}}</h2>
                <h2>{{$comic["sale_date"]}}</h2>
                <h2>{{$comic["type"]}}</h2>
            </div>
        </div>
    </main>
    
</body>

</html>