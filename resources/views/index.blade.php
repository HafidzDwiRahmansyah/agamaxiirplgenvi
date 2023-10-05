@extends('layout.mainlayout')
@section('title','Beranda - Website Agama')

@section('content')
<section id="hero-banner">    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center content">
                <h1 class="mb-1">Islamic Religious Material</h1>
                <p>Mempelajari tentang agama islam</p>
            </div>
        </div>
    </div>
</section>

<div class="line-limiting"></div>

<section id="jadwal-sholat">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
                <h1>JADWAL SHOLAT</h1>
            </div>
            <div class="col-12 mt-5">
                <div class="row">
                    <div class="col-8 month">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <div class="">
                                    <h2 class="fw-bolder text-title">Bulan Ini</h2>
                                </div>
                                <div class="">
                                    <a href="{{route('jadwalSholat')}}" class="text-decoration-none fs-sm text-dark opacity-75">
                                        View All
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 32 32" fill="#000000"><g><path d="M 4,15C 4,15.552, 4.448,16, 5,16l 19.586,0 l-4.292,4.292c-0.39,0.39-0.39,1.024,0,1.414 c 0.39,0.39, 1.024,0.39, 1.414,0l 6-6c 0.092-0.092, 0.166-0.202, 0.216-0.324C 27.972,15.26, 28,15.132, 28,15.004c0-0.002,0-0.002,0-0.004 l0,0c0-0.13-0.026-0.26-0.078-0.382c-0.050-0.122-0.124-0.232-0.216-0.324l-6-6c-0.39-0.39-1.024-0.39-1.414,0 c-0.39,0.39-0.39,1.024,0,1.414L 24.586,14L 5,14 C 4.448,14, 4,14.448, 4,15z"/></g></svg>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="card rounded-1 shadow-sm border-0 mt-3">
                            <div class="card-header border-0"></div>
                            <div class="card-body px-3">
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach ($hariDanTanggal as $data)
                                            <tr>
                                                <td class="my-2 py-3">{{$data['tanggal']}}</td>
                                            </tr>
                                            {{-- <p class="my-2 py-3"></p> --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer border-0"></div>
                        </div>
                    </div>
                    <div class="col-4 today">
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <h2 class="fw-bolder text-title">Hari Ini</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card rounded-1 shadow-sm mt-3 border-0">
                            <div class="card-header d-flex justify-content-between border-0 py-3">
                                <p class="mb-0">{{ \Carbon\Carbon::now()->format('D, d M Y') }}</p>
                                <p class="mb-0 fw-bolder">Bogor</p>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between my-3">
                                    <h3>Shubuh</h3>
                                    <h3>{{$getJadwal['shubuh']}}</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between my-3">
                                    <h3>Dzuhur</h3>
                                    <h3>{{$getJadwal['dzuhur']}}</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between my-3">
                                    <h3>Ashr</h3>
                                    <h3>{{$getJadwal['ashr']}}</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between my-3">
                                    <h3>Magrib</h3>
                                    <h3>{{$getJadwal['magrib']}}</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between my-3">
                                    <h3>Isya</h3>
                                    <h3>{{$getJadwal['isya']}}</h3>
                                </div>
                                <hr>
                            </div>
                            <div class="card-footer border-0"></div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<div class="line-limiting"></div>

<section id="alquran-audio">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row justify-content-center">
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2 class="text-title dark color-primary fw-bolder">My Al-Quran</h3>
                    </div>
                    <div class="col-lg-6 col-12">
                     
                        <div class="card rounded-1 shadow-sm">
                            <div class="card-body mx-2 mt-1">
                                <div class="header-card-audio d-flex">
                                    <img src="https://tailwindcss.com/_next/static/media/full-stack-radio.afb14e4e.png" width="100" class="rounded-3" alt="">
                                    <div class="ms-3">
                                        <h5 class="fw-bolder">Surah Al-Isra</h5>
                                        <p class="mb-1 fs-sm">Ayat. {{$alisra['nomorAyat']}}</p>
                                        <h6 class="fs-sm">Potongan Ayat Al-Isra</h6>
                                    </div>
                                </div>
                                <div class="audio-content my-4">
                                      <audio id="audio-alIsra" src="https://equran.nos.wjv-1.neo.id/audio-partial/Misyari-Rasyid-Al-Afasi/017032.mp3"></audio>
                                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar "></div>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                        <p class="mb-0 mt-2 fs-sm opacity-75">00:<span class="timer">00</span></p>
                                        <p class="mb-0 mt-2 fs-sm opacity-75">00:11</p>
                                      </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 position-relative shadow">
                                <div class="my-2 ">
                                    <button class="btn btn-primary position-absolute rounded-circle bg-white text-dark border-0 shadow-sm"></button>
                                    {{-- <p class="mb-0">p</p> --}}
                                    <div class="d-lg-flex d-md-flex d-none justify-content-evenly opacity-50">
                                        <svg width="24" height="24" fill="none">
                                            <path d="M6.492 16.95c2.861 2.733 7.5 2.733 10.362 0 2.861-2.734 2.861-7.166 0-9.9-2.862-2.733-7.501-2.733-10.362 0A7.096 7.096 0 0 0 5.5 8.226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5 5v3.111c0 .491.398.889.889.889H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg width="24" height="24" fill="none">
                                            <path d="M17.509 16.95c-2.862 2.733-7.501 2.733-10.363 0-2.861-2.734-2.861-7.166 0-9.9 2.862-2.733 7.501-2.733 10.363 0 .38.365.711.759.991 1.176" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 5v3.111c0 .491-.398.889-.889.889H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mt-lg-0 mt-5">
                        <div class="card rounded-1 shadow-sm mb-5">
                            <div class="card-header py-3 border-0">
                                <p class="mb-0"><b>AL-ISRA</b> : 32</p>
                            </div>
                            <div class="card-body">
                                <h1 class="text-end"><b>{{$alisra['teksArab']}}</b></h1>
                                <p class="fs-5 mt-3">{{$alisra['teksLatin']}}</p>
                                <p>{{$alisra['teksIndonesia']}}</p>
                            </div>
                            <div class="card-footer border-0"></div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<div class="line-limiting"></div>

<section id="jadwal-sholat">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
                <h1>JADWAL SHOLAT</h1>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-8">
                        <div class="card rounded-1 shadow-sm">
                            <div class="card-body">
                                <h2>{{$getJadwal['shubuh']}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rounded-1 shadow-sm">
                            <div class="card-header">
                                <p>{{ \Carbon\Carbon::now()->format('D, d M Y') }}</p>
                            </div>
                            <div class="card-body">
                                <h2>{{$getJadwal['shubuh']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

@endsection
