<?php

namespace App\Http\Controllers;

use App\Models\GroupMember;
use Illuminate\Http\Request;

class GroupMemberController extends Controller
{
    public function index()
    {
        $groupMembers = GroupMember::paginate(10);
        return response()->json($groupMembers);
    }

    public function store(Request $request)
    {
        $groupMember = GroupMember::create($request->all());
        return response()->json($groupMember, 201);
    }

    public function show($id)
    {
        $groupMember = GroupMember::findOrFail($id);
        return response()->json($groupMember);
    }

    public function update(Request $request, $id)
    {
        $groupMember = GroupMember::findOrFail($id);
        $groupMember->update($request->all());
        return response()->json($groupMember);
    }

    public function destroy($id)
    {
        GroupMember::destroy($id);
        return response()->json(null, 204);
    }

    public function byGroup($groupId)
    {
        $members = GroupMember::where('group_id', $groupId)->get();
        return response()->json($members);
    }
}

