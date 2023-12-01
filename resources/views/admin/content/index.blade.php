@extends('layout.adminlayout')

@section('content')
    <section>
        <div class="container mt-3 mb-5">
            <div class="row mb-3 align-items-end">
                <div class="col-9">
                    <h1>Content</h1>
                </div>
                <div class="col-3 text-end">
                    <a href="/admin/content/create" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card border-0 rounded-1 shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                    <tr class="">
                                        <th></th>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Jenis</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($content as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{Storage::url($data->photo)}}" class=" rounded-2 object-fit-cover" width="120px" height="120px" alt=""></td>
                                        <td style="white-space: nowrap">{{$data->title}}</td>
                                        <td>{{$data->jenis == 1 ? 'Materi' : 'Berita'}}</td>
                                        <td class="" style="white-space: nowrap">    
                                            <a href="/admin/content/{{$data->slug}}/edit" class="btn btn-primary rounded-1 btn-sm border-0 ">Edit</a>
                                            <form action="/admin/content/{{$data->id}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger rounded-1 btn-sm border-0" type="submit">Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
