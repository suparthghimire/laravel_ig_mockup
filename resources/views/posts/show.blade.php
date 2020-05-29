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
<main class="posts mt-30" id="post">



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
                    @can('update', $post)
                    <li class="settings-item">
                        <a href="{{route('posts.edit',$post->id)}}" class="settings-link">Edit Post</a>
                    </li>

                    <li class="settings-item">
                        {{ Form::open(['route'=>['posts.destroy',$post->id],'method'=>'POST']) }}
                        @method('DELETE')
                        {{ Form::submit('Delete This Post', ['class'=>'settings-link remove-btn-properties']) }}
                        {{ Form::close() }}
                    </li>
                    @endcan
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
        <div id="action">
            <action-component :postid="{{$post->id}}" :postlikes={{$post->likes}}></action-component>
        </div>
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
                <a href="{{route('comments.show',$post->id)}}" class=" text-white text-sm">This post Has No Comments.
                    Add
                    One?</a>
                @else
                <a href="{{route('comments.show',$post->id)}}" class="text-white text-sm mtb-10">View all
                    {{$post->comments->count()}} Comments and Add
                    one Here</a>
                @endif
            </div>
        </div>
    </div>
</main>
<script src="{{ mix('js/app.js') }}"></script>
@endsection
