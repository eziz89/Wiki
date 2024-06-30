<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    public function index()
    {
        // Using paginate()
        $revisions = Revision::paginate(10);
        return response()->json($revisions);
    }

    public function store(Request $request)
    {
        $revision = Revision::create($request->all());
        return response()->json($revision, 201);
    }

    public function show($id)
    {
        // Using findOrFail()
        $revision = Revision::findOrFail($id);
        return response()->json($revision);
    }

    public function update(Request $request, $id)
    {
        $revision = Revision::findOrFail($id);
        $revision->update($request->all());
        return response()->json($revision);
    }

    public function destroy($id)
    {
        Revision::destroy($id);
        return response()->json(null, 204);
    }

    public function recent()
    {
        // Using get() with orderBy
        $revisions = Revision::orderBy('created_at', 'desc')->take(10)->get();
        return response()->json($revisions);
    }
}

