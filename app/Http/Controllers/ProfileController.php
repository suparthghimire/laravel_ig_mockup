<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user) : false;
        $user = User::findOrFail($user);
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('profile.index')->withPosts($posts)->withUser($user)->withFollows($follows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profile.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user->profile);


        $this->validate($request, [
            'bio' => 'max:30',
            'image' => 'image',
        ]);

        $user->profile->bio = $request->input('bio');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/uploads/profile/' . $imgName);
            Image::make($image)->fit(1200, 720)->save($location);

            $user->profile->image = $imgName;
        }
        $user->profile->save();

        return redirect()->route('profile.index', $user->id);
    }
    public function searchView()
    {
        return view('search.index');
    }

    public function search(Request $request, $user)
    {
        // $query = $request->input('query');
        $query = $user;
        // dd($query);
        if ($query != '') {
            $users = User::where('name', 'LIKE', '%' . $query . '%')->orWhere('email', 'LIKE', '%' . $query . '%')->with('profile')->get();

            return response()->json($users);
            // return view('search.index')->withUsers($users)->withQuery($query);

        }
        // return view('search.index')->withMessage('Empty Query');

        // $users = User::all();
        // return response()->json($users);
        // $users = User::where('name', $request->keywords)->get();
        // return response()->json($users);
    }
}
