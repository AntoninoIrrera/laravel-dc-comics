<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function home()
    {
        $comics = Comic::all();

        return view("admin.home", compact("comics"));
    }


    public function index(){

        $comics = Comic::all();

        return view("admin.index", compact("comics"));
    }

    public function show($id){

        $comic = Comic::findOrFail($id);

        return view("admin.show",compact("comic"));
    }

    public function create()
    {


        return view("admin.create");
    }

    public function store(Request $request)
    {

        $data = $request->all();



        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('admin.show',$comic->id);
    }


    public function edit($id){

        $comic = Comic::findOrFail($id);

        return view("admin.edit", compact('comic') );
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('admin.show', $comic->id);

    }

    public function destroy($id){

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('admin.index');

    }

}
