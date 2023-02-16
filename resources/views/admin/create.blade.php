@extends("admin.layouts.app")


@section("main-content")
<main>
    <div class="container">
        <!-- @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul class="">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
        <form action="{{route('admin.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="{{old('title')}}" name="title">
                @if ($errors->has('title'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('title') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">description</label>
                <textarea name="description" class="form-control">{{old('description')}}</textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('description') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">thumb</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{old('thumb')}}" name="thumb">
                @if ($errors->has('thumb'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('thumb') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">price</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{old('price')}}" name="price">
                @if ($errors->has('price'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('price') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">series</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{old('series')}}" name="series">
                @if ($errors->has('series'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('series') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">sale date</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{old('sale_date')}}" name="sale_date">
                @if ($errors->has('sale_date'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('sale_date') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">type</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{old('type')}}" name="type">
                @if ($errors->has('type'))
                <div class="alert alert-danger mt-3">
                    <ul class="">
                        @foreach ($errors->get('type') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <button type="submit">Invio</button>
        </form>
    </div>
</main>

@endsection