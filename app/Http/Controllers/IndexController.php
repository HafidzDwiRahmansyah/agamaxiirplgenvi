<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    function index() {

        // $url = "https://cdn.statically.io/gh/lakuapik/jadwalsholatorg/master/adzan/bogor/{$year}/{$month}.json";
        // $jadwal = Http::get($url)->json();
        // $today = Carbon::now()->format('Y-m-d');
        // $filteredJadwal = [];

        // foreach($jadwal as $data) {
        //     if ($data['tanggal'] === $today) {
        //         $filteredJadwal[] = $data;
        //     }
        // }

        // $getJadwal = $filteredJadwal[0];

        // get jadwal adzan 
        $year = Carbon::now()->format('Y');
        $month = Carbon::now()->format('m');

        $url = "https://cdn.statically.io/gh/lakuapik/jadwalsholatorg/master/adzan/bogor/{$year}/{$month}.json";
        $jadwal = Http::get($url)->json();
        $today = Carbon::now()->format('Y-m-d');
        $getJadwal = collect($jadwal)->firstWhere('tanggal', $today);        

        // dd($getJadwal);    
        return view('index', compact('getJadwal'));
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
