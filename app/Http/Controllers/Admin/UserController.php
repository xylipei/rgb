<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends AdminController
{
    public function userList()
    {
        $users = DB::table('users')->paginate(10);
        return view('admin.user.list', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
