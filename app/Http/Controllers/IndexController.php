<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        return view('index');
    }

    function materi_agama(){
        return view('materi');
    }
}
