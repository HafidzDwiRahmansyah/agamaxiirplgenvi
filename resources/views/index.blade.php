@extends('layout.mainlayout')
@section('title','Beranda - Website Agama')
@section('content')
<section id="hero-banner">    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center content">
                <h1 class="mb-0">Islamic Religious Material</h1>
                <p>Mempelajari tentang agama islam</p>
            </div>
        </div>
    </div>
</section>

<div class="gradient-overlay"></div>

<section id="jadwal-sholat">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{$getJadwal['tanggal']}}</h1>
                <h1>{{$getJadwal['shubuh']}}</h1>
                <h1>{{$getJadwal['dzuhur']}}</h1>
                <h1>{{$getJadwal['ashr']}}</h1>
                <h1>{{$getJadwal['magrib']}}</h1>
                <h1>{{$getJadwal['isya']}}</h1>
            </div>
        </div>
    </div>
</section>
    @endsection
