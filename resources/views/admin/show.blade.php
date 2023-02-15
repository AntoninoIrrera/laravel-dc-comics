@extends("admin.layouts.app")


@section("main-content")
    <main class="d-flex justify-content-center">

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
    
@endsection