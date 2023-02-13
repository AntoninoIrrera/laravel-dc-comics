@extends("layouts.app")


@section("main-content")
<main>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale date</th>
                <th scope="col">type</th>
                <th scope="col">#</th>
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
                <td><a href="{{route('show',$comic['id'])}}" class="btn btn-primary">Show</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection