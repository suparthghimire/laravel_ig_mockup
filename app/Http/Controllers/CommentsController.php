<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'comments' => 'required',
        ]);

        $comment = new Comment;
        $comment->comments = $request->comments;
        $comment->post_id = $post->id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return redirect()->back();
    }
    public function show(Post $post)
    {
        return view('comments.show')->withPost($post);
    }
}
