<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Tag;

class PhotoController extends Controller
{
   public function index() {
    $photos = Photo::with('tags')->get();
    return view('photos.index',compact('photos'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('photos.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $photo = Photo::create($request->only(['title', 'url']));
    $photo->tags()->attach($request->input('tags'));
    // array de IDs
    return redirect()->route('photos.index');
    }

    public function show($Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

   public function edit(Photo $photo) {
    $tags = Tag::all();
    return view('photos.edit', compact('photo', 'tags'));
}

    public function update(Request $request, Photo $photo) {
$photo->update($request->only(['title', 'url']));
$photo->tags()->sync($request->input('tags'));
return redirect()->route('photos.index');
}

    public function destroy(Photo $photo) {
$photo->delete();
return redirect()->route('photos.index'); } }   
