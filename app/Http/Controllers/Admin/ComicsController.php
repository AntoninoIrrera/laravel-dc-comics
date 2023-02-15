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

        $data = $request->all();



        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('show',$comic->id);
    }


    public function edit($id){

        $comic = Comic::findOrFail($id);

        return view("edit", compact('comic') );
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('show', $comic->id);

    }

    public function destroy($id){

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('index');

    }

}
