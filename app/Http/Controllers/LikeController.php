<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        // Using paginate()
        $likes = Like::paginate(10);
        return response()->json($likes);
    }

    public function store(Request $request)
    {
        $like = Like::create($request->all());
        return response()->json($like, 201);
    }

    public function show($id)
    {
        // Using findOrFail()
        $like = Like::findOrFail($id);
        return response()->json($like);
    }

    public function update(Request $request, $id)
    {
        $like = Like::findOrFail($id);
        $like->update($request->all());
        return response()->json($like);
    }

    public function destroy($id)
    {
        Like::destroy($id);
        return response()->json(null, 204);
    }

    public function popular()
    {
        // Using get() with constraints
        $popularLikes = Like::where('count', '>', 50)->get();
        return response()->json($popularLikes);
    }
}

