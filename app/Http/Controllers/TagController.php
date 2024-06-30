<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        // Using paginate()
        $tags = Tag::paginate(10);
        return response()->json($tags);
    }

    public function store(Request $request)
    {
        $tag = Tag::create($request->all());
        return response()->json($tag, 201);
    }

    public function show($id)
    {
        // Using findOrFail()
        $tag = Tag::findOrFail($id);
        return response()->json($tag);
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return response()->json($tag);
    }

    public function destroy($id)
    {
        Tag::destroy($id);
        return response()->json(null, 204);
    }

    public function names()
    {
        // Using pluck()
        $tagNames = Tag::pluck('name');
        return response()->json($tagNames);
    }

    public function popular()
    {
        // Using get() with constraints
        $tags = Tag::where('popularity', '>', 100)->get();
        return response()->json($tags);
    }
}

