<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') XII RPL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/10a0abdeb7fffdc6542dd44ea0f75caf?family=iogensans-Bold" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- izitoast  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
    {{-- <link href="{{asset('css/style.css')}}" rel="stylesheet"> --}}

</head>

<body>

    {{-- <nav class="navbar navbar-expand-sm bg-transparent navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="/"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/materi">Materi</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/jadwal_sholat">Jadwal Sholat</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/alquran">Al-Quran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}


    <nav class="navbar navbar-expand-md bg-white py-3 ">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/bm3.png') }}" width="32" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-2" href="/">Beranda</a>
                    <a class="nav-link mx-2" href="/materi">Materi</a>
                    <a class="nav-link mx-2" href="/al-quran">Al-Qur'an</a>
                    <a class="nav-link mx-2" href="/jadwal-sholat">Jadwal Sholat</a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="border border-top py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-12 text-lg-start text-center">
                    <img src="{{ asset('img/bm3.png') }}" width="44" alt="">
                </div>
                <div class="col-lg-9 col-12 text-lg-end text-center mt-lg-auto mt-3">
                    <div class="d-flex justify-content-lg-end justify-content-center">
                        <a class="nav-link ms-3" href="/">Beranda</a>
                        <a class="nav-link ms-3" href="/materi">Materi</a>
                        <a class="nav-link ms-3" href="/al-quran">Al-Qur'an</a>
                        <a class="nav-link ms-3" href="/jadwal-sholat">Jadwal Sholat</a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center m-0">&copy; Copyright XII RPL Gen VI</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/main.js') }}"></script>

    @stack('javascript')
</body>

</html>
