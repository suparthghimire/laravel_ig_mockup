@extends('layouts.user')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/addpost-index.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/edit-profile.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/editpost.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}" />
@endsection

@section('content')
<div class="container">
    {!! Form::open(['route'=>['posts.update',$post->id],'method'=>'POST','files'=>true]) !!}
    @method('PATCH')
    <header class="header d-flex justify-content-bt w-100 align-items-center">
        <div class="header-wrapper d-flex align-items-center w-40 justify-content-bt">
            <a href="#" class="text-white">
                <i class="fas fa-times text-md"></i>
            </a>
            <h2 class="header-title">Edit Post</h2>
        </div>
        <div>
            <a href="#" class="text-primary">
                <label for="submit"><i class="fas fa-check text-md"></i></label>
                <input type="submit" value="Submit" class="d-none" id="submit" />
            </a>
        </div>
    </header>
    <main class="edit w-100">
        <div class="edit-post-hero p-20">
            <div class="edit-profile-user">
                <div class="profile-info">
                    <div class="story-img profile-img">
                        @if ($post->user->profile->image)
                        <img src="/storage/uploads/profile/{{$post->user->profile->image}}" alt="Profile Image">
                        @else
                        <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
                        @endif
                    </div>
                    <span class="profile-name post-profile-name">
                        <a href="{{route('profile.index',$post->user->id)}}"
                            class="text-white">{{$post->user->name}}</a>
                    </span>
                </div>
            </div>
            <div class="post-img">
                <img src="/storage/uploads/posts/{{$post->image}}" alt="">
                <label for="image">
                    <span class="file-btn">
                        <i class="fas fa-camera"></i>
                    </span>
                </label>
                <input class="d-none" type="file" name="image" id="image">
            </div>
            <input type="text" name="caption" class="edit-text" value="{{$post->caption}}"
                placeholder="This is Caption of the Image" />
        </div>

    </main>
    </form>
</div>
@endsection
