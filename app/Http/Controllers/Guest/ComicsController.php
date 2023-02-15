<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{   
    public function home(){
        return view('guest.home');
    }


    public function comics()
    {

        $comics = Comic::all();

        return view("guest.comics", compact("comics"));
    }


    public function show($id)
    {

        $comic = Comic::findOrFail($id);

        return view("guest.show", compact("comic"));
    }
}
