<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index(){
        return view("index");
    }

    public function show($id){
        return view("show");
    }
}
