<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function renderView()
    {
        $users = User::all();
        return view('Admin.Users.viewUsers', compact('users'));
    }
}
