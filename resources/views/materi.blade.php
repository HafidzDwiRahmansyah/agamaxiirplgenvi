@extends('layout.mainlayout')
@section('title','Materi')
@section('content')
<div class="container mb-5">
    <div class="row mb-4 mt-3">
        <div class="col-lg-4 col-12">
            <input type="text" name="" id="inputSearchMateri" class="form-control rounded-1" placeholder="Search Materi">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item mx-4" role="presentation">
                    <button class="nav-link text-color-secondary rounded-0 px-0 active" id="all-materi-tab" data-bs-toggle="pill" data-bs-target="#all-materi" type="button" role="tab">All</button>
                </li>
                <li class="nav-item mx-4" role="presentation">
                    <button class="nav-link text-color-secondary rounded-0 px-0" id="terbaru-materi-tab" data-bs-toggle="pill" data-bs-target="#terbaru-materi" type="button" role="tab">Terbaru</button>
                </li>
                <li class="nav-item mx-4" role="presentation">
                    <button class="nav-link text-color-secondary rounded-0 px-0" id="terlama-materi-tab" data-bs-toggle="pill" data-bs-target="#terlama-materi" type="button" role="tab">Terlama</button>
                </li>
            </ul>
            <hr>
                <div class="tab-content" id="data-materi">
                    <div class="tab-pane fade show active" id="all-materi" role="tabpanel" tabindex="0">
                        <!-- Content for All Materi -->
                        <div class="row mt-3 justify-content-lg-start justify-content-center">
                            @foreach($materi as $data)
                            <div class="col-lg-3 col-md-6 col-12 px-2 gy-3">
                                <div class="card rounded-1 shadow-sm h-100">
                                    <div class="card-header p-0">
                                        <img src="{{ Storage::url($data->photo) }}" height="200px" class="w-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-bolder">{{$data->title}}</h6>
                                        <p class="fs-s-sm opacity-75">{{$data->sub_title}}</p>
                                        <div class="text-end mt-2">
                                            <a href="/berita/{{$data->slug}}" class="btn btn-primary rounded-1 border-0 fs-s-sm">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="terbaru-materi" role="tabpanel" tabindex="0">

                        <!-- Content for Terbaru Materi -->
                        <div class="row mt-3 justify-content-lg-start justify-content-center">
                            @foreach($materiTerbaru as $data)
                            <div class="col-lg-3 col-md-6 col-12 px-2 gy-3">
                                <div class="card rounded-1 shadow-sm h-100">
                                    <div class="card-header p-0">
                                        <img src="{{ Storage::url($data->photo) }}" height="200px" class="w-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-bolder">{{$data->title}}</h6>
                                        <p class="fs-s-sm opacity-75">{{$data->sub_title}}</p>
                                        <div class="text-end mt-2">
                                            <a href="/berita/{{$data->slug}}" class="btn btn-primary rounded-1 border-0 fs-s-sm">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="terlama-materi" role="tabpanel" tabindex="0">

                        <!-- Content for Terlama Materi -->
                        <div class="row mt-3 justify-content-lg-start justify-content-center">
                            @foreach($materiTerlama as $data)
                            <div class="col-lg-3 col-md-6 col-12 px-2 gy-3">
                                <div class="card rounded-1 shadow-sm h-100">
                                    <div class="card-header p-0">
                                        <img src="{{ Storage::url($data->photo) }}" height="200px" class="w-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-bolder">{{$data->title}}</h6>
                                        <p class="fs-s-sm opacity-75">{{$data->sub_title}}</p>
                                        <div class="text-end mt-2">
                                            <a href="/berita/{{$data->slug}}" class="btn btn-primary rounded-1 border-0 fs-s-sm">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

@push('javascript')
    <script>
        $(document).ready(function(){
            $("#inputSearchMateri").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#data-materi .tab-pane .row .col-lg-3").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush
