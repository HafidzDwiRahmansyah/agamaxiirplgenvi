@extends('layout.mainlayout')
@section('title','Materi Content')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-12 text-center">
            <h1 class="fw-bold">{{$materi->title}}</h1>
        </div>
        <div class="col-lg-9 col-12 fs-sm opacity-75 text-center">
            <p>{{$materi->sub_title}}</p>
        </div>
        <div class="col-lg-10 col-12 mt-3">
            <img src="{{Storage::url($materi->photo)}}" width="100%" height="400px" class="object-fit-cover" alt="">
        </div>
        <div class="col-12 mt-4">
            <p>{!! nl2br($materi->body) !!}</p>
        </div>
    </div>
</div>
@endsection
