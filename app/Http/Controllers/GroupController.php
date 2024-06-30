<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        // Using paginate()
        $groups = Group::paginate(10);
        return response()->json($groups);
    }

    public function store(Request $request)
    {
        $group = Group::create($request->all());
        return response()->json($group, 201);
    }

    public function show($id)
    {
        // Using findOrFail()
        $group = Group::findOrFail($id);
        return response()->json($group);
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->update($request->all());
        return response()->json($group);
    }

    public function destroy($id)
    {
        Group::destroy($id);
        return response()->json(null, 204);
    }

    public function names()
    {
        // Using pluck()
        $groupNames = Group::pluck('name');
        return response()->json($groupNames);
    }

    public function active()
    {
        // Using get() with constraints
        $activeGroups = Group::where('active', true)->get();
        return response()->json($activeGroups);
    }
}

