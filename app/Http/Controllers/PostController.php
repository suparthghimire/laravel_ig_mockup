<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'caption' => '',
            'image' => 'required|image',
        ]);



        $post = new Post;
        $post->caption = $request->caption;
        $post->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/uploads/posts/' . $imgName);
            Image::make($image)->save($location);

            $post->image = $imgName;
        }
        $post->save();
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $this->authorize('update', $post);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $this->authorize('update', $post);
        $this->validate($request, [
            'caption' => '',
            'image' => 'image',
        ]);
        $post->caption = $request->input('caption');
        $post->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/uploads/posts/' . $imgName);
            Image::make($image)->save($location);

            $oldImg = $post->image;

            Storage::delete($oldImg);

            $post->image = $imgName;
        }
        $post->save();
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('update', $post);

        // dd('storage/uploads/posts/' . $post->image);
        File::delete('storage/uploads/posts/' . $post->image);        // dd($post->image);
        $post->delete();
        return redirect()->route('profile.index', $post->user->id);
    }
}
