<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Using paginate()
        $articles = Article::paginate(10);
        return response()->json($articles);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        // Using findOrFail()
        $article = Article::findOrFail($id);
        return response()->json($article);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article);
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return response()->json(null, 204);
    }

    public function titles()
    {
        // Using pluck()
        $articleTitles = Article::pluck('title');
        return response()->json($articleTitles);
    }

    public function published()
    {
        // Using get() with constraints
        $articles = Article::where('status', 'published')->get();
        return response()->json($articles);
    }
}

