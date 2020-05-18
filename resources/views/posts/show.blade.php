@extends('layouts.user')


@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/footer.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/addpost-index.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/index.css')}}" />
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
                        <a href="#" class="action-link"><i class="far fa-heart"></i></a>
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
        <p class="post-likes">28 Likes</p>
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
        <div class="post-comment">
            <div class="post-highlighted-comment">
                <p class="comment-container"></p>
                <span class="profile-name">suparth.ghimrie</span>
                <span class="comment-txt">Wouuuu! Nice Picture!</span>
                </p>
            </div>
            <div class="post-comment-text-area">
                <div class="story-img profile-img" id="comment-img">
                    <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                </div>
                <div class="comment-write">
                    <input type="text" placeholder="Add a Comment." />
                </div>
                <div class="post-emojis">
                    <ul class="emoji-list">
                        <li class="emoji-item">
                            <a href="#" class="emoji-link">😀</a>
                        </li>
                        <li class="emoji-item">
                            <a href="#" class="emoji-link">🥰</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
