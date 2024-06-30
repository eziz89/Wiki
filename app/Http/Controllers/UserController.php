<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Using paginate()
        $users = User::paginate(10);
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show($id)
    {
        // Using findOrFail()
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }

    public function emails()
    {
        // Using pluck()
        $userEmails = User::pluck('email');
        return response()->json($userEmails);
    }

    public function active()
    {
        // Using get() with constraints
        $activeUsers = User::where('active', true)->get();
        return response()->json($activeUsers);
    }
}

