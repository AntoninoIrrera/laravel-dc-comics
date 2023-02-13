<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>index</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale date</th>
                <th scope="col">type</th>

            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <th scope="row">{{$comic["id"]}} </th>
                <td>{{$comic["title"]}}</td>
                <td>{{$comic["price"]}}</td>
                <td>{{$comic["series"]}}</td>
                <td>{{$comic["sale_date"]}}</td>
                <td>{{$comic["type"]}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>