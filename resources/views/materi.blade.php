@extends('layout.mainlayout')
@section('title','Page Materi')
@section('content')
<div class="container">
    <div class="row justify-centent-center">
        <div class="col-lg-4">
            <a class="text-decoration-none" href="materi/hari-akhir">
                <div class="card border-0 shadow rounded-2">
                    <img class="rounded-2" width="100%" height="auto" src="image/kiamat.jpg" alt="">
                    <div class="card-body">
                        <p class="text-center pt-3">Hari Akhir</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a class="text-decoration-none" href="materi/rasa-bersyukur">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <p class="text-center">Rasa Bersyukur</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a class="text-decoration-none" href="materi/menjadi-yang-terbaik">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <p class="text-center">Menjadi Yang Terbaik</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
{{-- <embed type="application/pdf" src="materi-agama-12.pdf" width="100%" height="600px"></embed> --}}
@endsection
