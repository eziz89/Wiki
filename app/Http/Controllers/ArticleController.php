<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
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
        $articleTitles = Article::pluck('title');
        return response()->json($articleTitles);
    }

    public function published()
    {
        $articles = Article::where('status', 'published')->get();
        return response()->json($articles);
    }
}

