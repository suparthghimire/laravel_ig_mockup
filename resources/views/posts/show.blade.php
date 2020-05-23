@extends('layouts.user')


@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/addpost-index.css')}}" />
@endsection

@section('content')
<header class="header">
    <div class="header-wrapper d-flex align-items-center w-20 justify-content-bt">
        <a href="#" class="text-white">
            <i class="fas fa-arrow-left"></i></a>
        <h2 class="header-title">Posts</h2>
    </div>
</header>
<main class="posts mt-30">
    <div class="post-wrapper">
        <div class="post-header">
            <div class="profile-info">
                <div class="story-img profile-img">
                    @if ($post->user->profile->image)
                    <img src="/storage/uploads/profile/{{$post->user->profile->image}}" alt="Profile Image">
                    @else
                    <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
                    @endif
                </div>
                <span class="profile-name post-profile-name">
                    <a href="{{route('profile.index',$post->user->id)}}" class="text-white">{{$post->user->name}}</a>
                </span>
            </div>
            <input type="checkbox" name="checkbox-0" id="checkbox-0" class="checkbox">
            <label for="checkbox-0">
                <!--Yesma counter halna parxa-->
                <div class="settings">
                    <i class="fas fa-ellipsis-v setting-icon" id="setting-icon"></i>
                </div>
            </label>
            <div class="settings-container">
                <ul class="settings-list">
                    <li class="settings-item">
                        <a href="#" class="settings-link">Edit Post</a>
                    </li>
                    <li class="settings-item">
                        {{ Form::open(['route'=>['posts.destroy',$post->id],'method'=>'POST']) }}
                        @method('DELETE')
                        {{ Form::submit('Delete This Post', ['class'=>'settings-link remove-btn-properties']) }}
                        {{-- <a href="#" class="settings-link">Delete This Post</a> --}}
                        {{ Form::close() }}
                    </li>
                    <li class="settings-item">
                        <a href="#" class="settings-link">Copy Link</a>
                    </li>
                    <li class="settings-item">
                        <a href="#" class="settings-link">Share To...</a>
                    </li>
                    <li class="settings-item">
                        <a href="#" class="settings-link">Unfollow</a>
                    </li>
                    <li class="settings-item">
                        <a href="#" class="settings-link">Mute</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="post-img">
            <img src="/storage/uploads/posts/{{$post->image}}" alt="">
        </div>
        <div class="post-action">
            <div class="post-action-left">
                <ul class="action-list">
                    <li class="action-item">
                        {!! Form::open(['route'=>['like',$post->id],'method'=>'post']) !!}
                        <button class="button" id="button">
                            <i id="like" class="far fa-heart white"></i>
                        </button>
                        {!! Form::close() !!}
                    </li>
                    <li class="action-item">
                        <a href="#" class="action-link"><i class="far fa-comment"></i></a>
                    </li>
                    <li class="action-item">
                        <a href="#" class="action-link"><i class="fas fa-paper-plane"></i></a>
                    </li>
                </ul>
            </div>
            <div class="post-action-right">
                <a href="#"><i class="far fa-bookmark"></i></a>
            </div>
        </div>
        <p class="post-likes">{{$post->likes->count()}} Likes</p>
        {{-- {{dd($post->caption)}} --}}
        @if ($post->caption)
        <p class="caption">
            <a href="{{route('profile.index',$post->user->id)}}"
                class="text-white font-weight-bold">{{$post->user->name}}</a>
            <span class="caption-txt">
                {{$post->caption}}
            </span>
        </p>
        @endif
        <div class="post-comment mb-20 ">
            <div class="post-highlighted-comment">
                @if($post->comments->count()==0)
                <a class="text-white text-sm">This post Has No Comments. Add One?</a>
                @else
                <a href="{{route('comments.show',$post->id)}}" class="text-white text-sm mtb-10">View all
                    {{$post->comments->count()}} Comments and Add
                    one Here</a>
                @endif
            </div>
        </div>
    </div>
    </div>

</main>
@endsection
