<?php

namespace App\Http\Controllers;

use App\Models\Content;
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

        
        // $url = "https://cdn.statically.io/gh/lakuapik/jadwalsholatorg/master/adzan/bogor/{$year}/{$month}.json";
        $url = "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/adzan/bogor/{$year}/{$month}.json";
        $jadwal = Http::get($url)->json();
        $today = Carbon::now()->format('Y-m-d');
        $getJadwal = collect($jadwal)->firstWhere('tanggal', $today);
        $keysToKeep = ['shubuh', 'dzuhur', 'ashr', 'magrib', 'isya'];

        $getJadwal = array_intersect_key($getJadwal, array_flip($keysToKeep));
        
        $filteredData = array_filter($getJadwal, function ($time) {
            $timeNow = Carbon::now()->format('H:i');    
            return strtotime($time) > strtotime($timeNow);
        });

        $nextWaktuJadwal = key($filteredData);
        $nextJamJadwal = current($filteredData);

        $currentTime = Carbon::now()->format('H:i');
        $targetTime = Carbon::parse($nextJamJadwal);


        // dd('');
            
        // dd(Carbon::now()->format('Y-m-d H:i:s'));
        
        

        // get alquran

        // $alisra = 1;
        $EPquran = Http::get('https://equran.id/api/v2/surat/17')->json();
        $alisra = $EPquran['data']['ayat']['31'];
        // dd($alisra);

        // get day and date 

        // $bulanIni = Carbon::now();
        // $bulanIni->day(1);
        // $hariDanTanggal = [];
        // while ($bulanIni->month == Carbon::now()->month) {
        //     $hariDanTanggal[] = [
        //         'tanggal' => $bulanIni->format('D, d M'),
        //         'hari' => $bulanIni->isoFormat('dddd'), 
        //     ];
        //     $bulanIni->addDay(); 
        // }

        // $dateNow = Carbon::now()->subDay(1)->format('d');

        // dd($hariDanTanggal[$dateNow]);

        // foreach($hariDanTanggal as $data){
            
        // }


        // get materi 

        $materiUtama = Content::inRandomOrder()->where('jenis', 1)->first();
        $materi = Content::where('jenis', 1)->take(4)->whereNotIn('id', [$materiUtama->id])->get();

        // get berita newest 
        $berita = Content::where('jenis', 2)->take(4)->orderByDesc('created_at')->get();
              

        // return view('index', compact('getJadwal','alisra', 'jadwal', 'hariDanTanggal'));
        return view('index', compact('alisra', 'filteredData', 'getJadwal', 'jadwal', 'nextJamJadwal', 'nextWaktuJadwal', 'materiUtama', 'materi', 'berita'));
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
