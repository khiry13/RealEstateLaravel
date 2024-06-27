<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}