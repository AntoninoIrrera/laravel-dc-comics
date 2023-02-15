@extends("admin.layouts.app")


@section("main-content")
<main>

    <div class="text-end me-3 mt-3">
        @if (session('message'))
        <div class="d-inline-block alert alert-warning">
            {{session('message')}}
        </div>
        @endif
        <a href="{{route('admin.create')}}" class="btn btn-secondary">Create</a>
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
                    <a href="{{route('admin.show',$comic['id'])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.edit',$comic['id'])}}" class="btn btn-warning">Edit</a>
                    <form class="d-inline-block" action="{{route('admin.destroy', $comic['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection

@section("scripts")
@vite('resources/js/popupDelete.js')
@endsection