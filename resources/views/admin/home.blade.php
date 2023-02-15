@extends("admin.layouts.app")


@section("main-content")

<main>
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h1>Benvenuto nella home Admin</h1>
            </div>
            @foreach($comics as $comic)
            <div class="col-3 mt-3">

                <div class="card" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic["series"]}}</h5>
                        <h2>{{$comic["price"]}}</h2>
                        <h2>{{$comic["sale_date"]}}</h2>
                        <h2>{{$comic["type"]}}</h2>
                        <a class="btn btn-primary" href="{{route('admin.show',$comic['id'])}}">Show</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</main>

@endsection