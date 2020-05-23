<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;

class LikesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function store(Post $post)
    {
        $user_id = auth()->user()->id;
        $checkUser = Like::where(['user_id' => $user_id, 'post_id' => $post->id])->get();
        $checkUser_data = Like::where(['user_id' => $user_id, 'post_id' => $post->id]);
        if (count($checkUser) == 0) {
            $like = new Like;
            $like->post_id = $post->id;
            $like->user_id = $user_id;
            $like->save();
            return redirect()->back();
        } else {
            $checkUser_data->delete();
            return redirect()->back();
            // return $checkUser;
        }
    }
}
