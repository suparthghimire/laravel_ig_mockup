<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    // public function index()
    // {

    //     $comments = Comment::all();
    //     $users = auth()->user()->following()->pluck('profiles.user_id');
    //     $posts = Post::whereIn('user_id', $users)->with('user')->latest()->get();
    //     return view('welcome')->withPosts($posts)->withComments($comments);
    // }
    public function index()
    {
        return view('welcome');
    }

    public function indexVue()
    {

        // $comments = Comment::all();

        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with(['user.profile', 'comments'])->with('likes')->latest()->get();

        // $auth_user = Auth::user->with('likes');
        return response()->json([
            'posts' => $posts,
        ]);
    }

    public function checkLike(Post $post)
    {
        // $likes = (auth()->user()) ? auth()->user()->likes->contains($post) : false;
        $likes = Like::where(['user_id' => auth()->user()->id, 'post_id' => $post->id])->get();
        // dd($likes);
        if (count($likes) != 0) {
            return "likes";
        } else {
            return "dislikes";
        }
        // dd($likes);
    }
}
