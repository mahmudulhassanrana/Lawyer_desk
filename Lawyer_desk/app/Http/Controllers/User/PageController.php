<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $users = User::all()->where('usertype', '3');
        return view('user.lawyer.list', compact('users'));
    }

    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('user.lawyer.infoview', compact('user'));
    }
}
