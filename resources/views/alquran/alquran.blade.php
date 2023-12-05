@extends('layout.mainlayout')
@section('title', 'Al-Quran')
@section('content')

    <div class="container mb-5">
        <div class="row my-3 ">
            <div class="col-lg-4 col-12">
                <input type="text" name="" id="inputSearchSurah" class="form-control rounded-1" placeholder="Search Surah">
            </div>
        </div>
        <div class="row wrapper-surah">
            @foreach ($quranAll['data'] as $data)
                <div class="col-lg-4 col-md-6 col-12 gy-4">
                    <a class="text-decoration-none fc-dark " href="/al-quran/{{ $data['nomor'] }}/{{strtolower($data['namaLatin'])}}">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 text-center my-auto">
                                        <div class="no-bg rounded-circle py-2">
                                            <p class="mb-0">{{ $data['nomor'] }}</p>
                                        </div>
                                    </div>
                                    <div class="col-6 my-auto">
                                        <p class="mb-0">{{ $data['namaLatin'] }}</p>
                                        <p class="mb-0 fw-300 fs-s-sm">{{ $data['arti'] }}</p>
                                    </div>
                                    <div class="col-3 my-auto text-center">
                                        <p class="mb-0">{{ $data['nama'] }}</p>
                                        <p class="mb-0 fs-s-sm">{{ $data['jumlahAyat'] }} Ayat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@push('javascript')
    <script>
        $(document).ready(function(){
            $("#inputSearchSurah").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".wrapper-surah .col-lg-4").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush
