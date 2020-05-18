<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WelcomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->latest()->get();
        return view('welcome')->withPosts($posts);
    }
}
