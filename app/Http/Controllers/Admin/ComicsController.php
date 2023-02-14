<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index(){

        $comics = Comic::all();

        return view("index", compact("comics"));
    }

    public function show($id){

        $comic = Comic::findOrFail($id);

        return view("show",compact("comic"));
    }

    public function create()
    {


        return view("create");
    }

    public function store(Request $request)
    {

        $element = $request->all();

        $comic = new Comic();
        $comic->title = $element["title"];
        $comic->description = $element["description"];
        $comic->thumb = $element["thumb"];
        $comic->price = $element["price"];
        $comic->series = $element["series"];
        $comic->sale_date = $element["sale_date"];
        $comic->type = $element["type"];
        $comic->save();

        return redirect()->route('show',$comic->id);
    }
}
