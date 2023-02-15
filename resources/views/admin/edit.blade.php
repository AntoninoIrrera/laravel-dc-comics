@extends("admin.layouts.app")


@section("main-content")
<main>
    <div class="container">
        <form action="{{route('admin.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="{{$comic->title}}" name="title">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">description</label>
               <textarea name="description" class="form-control">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">thumb</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{$comic->thumb}}" name="thumb">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">price</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{$comic->price}}" name="price">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">series</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{$comic->series}}" name="series">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">sale date</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{$comic->sale_date}}" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">type</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{$comic->type}}" name="type">
            </div>
            <button type="submit">Invio</button>
        </form>
    </div>
</main>

@endsection