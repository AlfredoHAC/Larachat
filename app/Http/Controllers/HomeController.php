<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome')->with(['users' => User::all(),'chats' => Chat::all()]);
    }
}
