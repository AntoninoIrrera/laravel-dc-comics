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
        return view("show");
    }
}
