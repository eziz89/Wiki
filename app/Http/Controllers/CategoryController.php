<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json($category);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(null, 204);
    }

    public function names()
    {
        $categoryNames = Category::pluck('name');
        return response()->json($categoryNames);
    }

    public function active()
    {
        $categories = Category::where('active', true)->get();
        return response()->json($categories);
    }
}
