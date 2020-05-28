<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;
use App\User;
use App\Notifications\PostLiked;

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
            // $post->user->notify(new PostLiked(User::findOrFail($user_id)));
            $post->user->notify(new PostLiked(User::findOrFail($user_id), Post::findOrFail($post->id)));
            return 'liked';
            // return redirect()->back();
        } else {
            $checkUser_data->delete();
            return 'unliked';
            // return redirect()->back();
            // return $checkUser;
        }
    }
}
