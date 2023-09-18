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

    function jadwal_sholat(){
        return view('jadwal_sholat');
    }

    function alquran(){
        return view('alquran');
    }
}
