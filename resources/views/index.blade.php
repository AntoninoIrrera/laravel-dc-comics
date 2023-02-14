@extends("layouts.app")


@section("main-content")
<main>

    <div class="text-end me-3 mt-3">
        <a href="{{route('create')}}" class="btn btn-secondary">Create</a>
    </div>

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
                <td>
                    <a href="{{route('show',$comic['id'])}}" class="btn btn-primary">Show</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection