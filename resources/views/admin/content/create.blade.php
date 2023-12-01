@extends('layout.adminlayout')

@section('content')
    <section>
        <div class="container mt-3 mb-5">
            <div class="row mb-3 align-items-end">
                <div class="col-12 text-center">
                    <h1>Buat Content</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card border-0 rounded-1 shadow-sm">
                        <div class="card-body mb-4">
                            <form action="/admin/content" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="mt-3">
                                    <label for="" class="mb-2 fs-sm opacity-75">Thumbnail</label>
                                    <input  type="file" name="photo" class="form-control fs-sm text-gray rounded-1" value="{{old('photo')}}" id="">
                                    @error('photo') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mt-3">
                                        <label for="" class="mb-2 fs-sm opacity-75">Title</label>
                                        <input  type="text" name="title" class="form-control fs-sm text-gray form-control-lg rounded-1" value="{{old('title')}}" id="">
                                        @error('title') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="mt-3">
                                        <label for="" class="mb-2 fs-sm opacity-75">Sub Title</label>
                                        <input  type="text" name="sub_title" class="form-control fs-sm text-gray form-control-lg rounded-1" value="{{old('sub_title')}}" id="">
                                        @error('sub_title') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mt-3">
                                        <label for="" class="mb-2 fs-sm opacity-75">Jenis</label>
                                        <select name="jenis" class="form-control fs-sm text-gray form-control-lg rounded-1" id="">
                                            <option selected disabled></option>
                                            <option @if(old('jenis') == 1) selected @endif value="1">Materi</option>
                                            <option @if(old('jenis') == 2) selected @endif value="2">Berita</option>
                                        </select>
                                        @error('jenis') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="" class="mb-2 fs-sm opacity-75">Body</label>    
                                <textarea name="body" class="bodyContent">{{old('body')}}</textarea>
                                @error('body') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-primary rounded-1 btn-sm fs-s-sm">Simpan</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('javascript')
    <script>
        $(".bodyContent").summernote({
            placeholder: "Hello {{Auth::user()->name}}",
            // tabsize: 90,
            height: 300,
        });
    </script>
@endpush
