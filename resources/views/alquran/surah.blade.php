@extends('layout.mainlayout')
@section('title','Al-Quran')
@section('content')

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-lg-2 d-lg-block d-none">
                <div class="surah-column">
                    @foreach ($quranAll['data'] as $item)
                        <p class="my-4 mx-2">
                            <a href="/al-quran/{{$item['nomor']}}/{{strtolower($item['namaLatin'])}}" class="text-decoration-none text-dark">{{$item['namaLatin']}}</a>
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-1 d-lg-block d-none ps-0 text-center">
                <div class="ayat-column">
                    @foreach ($quranData['data']['ayat'] as $data)
                    <p class="my-4">
                        <a href="#{{$data['nomorAyat']}}" class="text-decoration-none text-dark">{{$data['nomorAyat']}}</a>
                    </p>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9 col-12">
                @foreach ($quranData['data']['ayat'] as $data)
                    <div class="mb-5" id="{{$data['nomorAyat']}}">
                        <div class="">
                            <p>{{$data['nomorAyat']}}</p>
                        </div>
                        <h1 class="text-end fw-bold">{{$data['teksArab']}}</h1>
                        <h5>{{$data['teksLatin']}}</h5>
                        <p class="fs-sm opacity-75">{{$data['teksIndonesia']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
