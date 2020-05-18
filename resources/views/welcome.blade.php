@extends('layouts.user')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}">
@endsection

@section('content')
<header class="header" id="header">
    <nav class="nav" id="nav">
        <h1 class="logo" id="logo">
            Finsta
        </h1>
        <ul class="nav-list" id="nav-list">
            <li class="nav-item" id="nav-item">
                <a href="#" class="nav-link" id="nav-link">
                    <i class="far fa-play-circle"></i>
                </a>
            </li>
            <li class="nav-item" id="nav-item">
                <a href="#" class="nav-link" id="nav-link">
                    <i class="fas fa-paper-plane"></i>
                </a>
            </li>
        </ul>
    </nav>
    <section class="stories">
        <ul class="story-list">
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/add_new_stories.png')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/suparth.jpg')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/siddharth.jpg')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/susmita.jpg')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/suresh.jpg')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/susmita.jpg')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="{{asset('assets/img/stories/sabitra.jpg')}}" alt="Add new Story">
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
        </ul>
    </section>
</header>

<main class="posts">
    @foreach ($posts as $post)
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
                        <a href="#" class="settings-link">Edit</a>
                    </li>
                    <li class="settings-item">
                        <a href="#" class="settings-link">Turn On Post Notification</a>
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
            <img src="/storage/uploads/posts/{{$post->image}}" alt=""> </div>
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
        <div class="post-comment">
            <div class="post-highlighted-comment">
                <p class="comment-container"></p>
                <span class="profile-name">suparth.ghimrie</span>
                <span class="comment-txt">Wouuuu! Nice Picture!</span>
                </p>
            </div>
            <div class="post-comment-text-area">
                <div class="story-img profile-img" id="comment-img">
                    <img src="/storage/uploads/profile/{{auth()->user()->profile->image}}" alt="">
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
    @endforeach

    {{-- <div class="post-wrapper">
        <div class="post-header">
            <div class="profile-info">
                <div class="story-img profile-img">
                    <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
    </div>
    <span class="profile-name post-profile-name">
        suparth.ghimrie
    </span>
    </div>
    <input type="checkbox" name="checkbox-1" id="checkbox-1" class="checkbox">
    <label for="checkbox-1">
        <!--Yesma counter halna parxa-->
        <div class="settings">
            <i class="fas fa-ellipsis-v setting-icon" id="setting-icon"></i>
        </div>
    </label>
    <div class="settings-container">
        <ul class="settings-list">
            <li class="settings-item">
                <a href="#" class="settings-link">Edit</a>
            </li>
            <li class="settings-item">
                <a href="#" class="settings-link">Turn On Post Notification</a>
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
        <img src="{{asset('assets/img/posts/profile.jpg')}}" alt="">
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
    </div> --}}
</main>

@endsection


@section('scripts')
<script src="{{asset('assets/js/login.js')}}"></script>
@endsection
