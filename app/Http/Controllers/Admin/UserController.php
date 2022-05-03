<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(20);
        return Inertia::render('Admin/User/Index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return Inertia::render('Admin/User/Show', [
            'user' => $user
        ]);
    }
}
