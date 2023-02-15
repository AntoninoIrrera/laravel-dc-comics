@extends("guest.layouts.app")


@section("main-content")
    <main class="d-flex justify-content-center">

        <div class="card mt-5" style="width: 22rem;">
            <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Series: {{$comic["series"]}}</h5>
                <h2>Price: {{$comic["price"]}}</h2>
                <h2>Sale date: {{$comic["sale_date"]}}</h2>
                <h2>Type: {{$comic["type"]}}</h2>
            </div>
        </div>
    </main>
    
@endsection