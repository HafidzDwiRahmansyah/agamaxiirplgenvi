<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = Content::orderByDesc('created_at')->get();
        return view('admin.content.index', compact('content'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required|max:200',
            'sub_title' => 'required|max:200',
            'jenis' => 'required',
            'body' => 'required',
        ]);


        $content = new Content();
        $newPhoto = $request->photo->store('gambar', 'public');
        $content->photo = $newPhoto;
        $content->title = $request->title;
        $content->sub_title = $request->sub_title;
        $content->slug = Str::slug($request->title);
        $content->jenis = $request->jenis;
        $content->body = $request->body;
        $content->save();

        return redirect('/admin/content');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $content = Content::where('slug', $id)->first();
        return view('admin.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required|max:200',
            'sub_title' => 'required|max:200',
            'jenis' => 'required',
            'body' => 'required',
        ]);
        $content = Content::findOrFail($id);

        if($request->hasFile('photo')){
            $exist = Storage::disk('public')->exists($content->photo);
            if($exist){
                $delete = Storage::disk('public')->delete($content->photo);

                $new_file = $request->photo->store('gambar', 'public');
                $content->photo = $new_file;
            }
        }

        $content->title = $request->title;
        $content->sub_title = $request->sub_title;
        $content->slug = Str::slug($request->title);
        $content->jenis = $request->jenis;
        $content->body = $request->body;
        $content->update();

        return redirect('/admin/content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $content = Content::findOrFail($id);

        $exist = Storage::disk('public')->exists($content->photo);
        if($exist){
            $delete = Storage::disk('public')->delete($content->photo);
        }

        $content->delete();

        return redirect('/admin/content');
    }
}
