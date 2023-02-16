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

        $request->validate([
            'title' => 'required|max:150|string',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:100|string',
            'sale_date' => 'required|date',
            'type' => 'required|max:100|string',

        ],[
            
            'title.required' => 'il campo è obbligatorio',
            'title.max' => 'il campo puo contenere massimo 150 caratteri',
            'title.string' => 'il campo deve contenere una stringa',
            'description.required' => 'il campo è obbligatorio',
            'description.string' => 'il campo deve contenere una stringa',
            'thumb.required' => 'il campo è obbligatorio',
            'thumb.url' => 'il capo deve contenere un URL valido',
            'price.required' => 'il campo è obbligatorio',
            'price.numeric' => 'il capo deve contenere un numero',
            'series.required' => 'il campo è obbligatorio',
            'series.max' => 'il campo puo contenere massimo 100 caratteri',
            'series.string' => 'il campo deve contenere una stringa',
            'sale_date.required' => 'il campo è obbligatorio',
            'sale_date.date' => 'il campo deve contenere una data valida',
            'type.required' => 'il campo è obbligatorio',
            'type.max' => 'il campo puo contenere massimo 100 caratteri',
            'type.string' => 'il campo deve contenere una stringa',


        ]);


        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('admin.show',$comic->id)->with('message', "l'elemento è stato creato correttamente");
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

        return redirect()->route('admin.show', $comic->id)->with('message', "l'elemento è stato modificato corretamente");

    }

    public function destroy($id){

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('admin.index')->with('message', "$comic->title è stato cancellato correttamente");

    }

}
