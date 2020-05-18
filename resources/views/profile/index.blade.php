@extends('layouts.user')


@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/profile-index.css')}}">
@endsection

@section('content')
<header class="header">
    <nav class="nav">
        <p class="profile-name">
            <a href="#" class="nav-link">
                {{$user->name}}
            </a>
        </p>
        <div class="header-icon">
            <a href="#" class="nav-link">
                <label for="setting-checkbox"><i class="fas fa-bars icon-toggler"></i></label>
            </a>
            <input type="checkbox" class="setting-checkbox" id="setting-checkbox">
            <div class="profile-settings">
                <ul class="settings-list">
                    <li class="settings-list">
                        <a class="settings-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="settings-list">
                        <a href="#" class="settings-link">Delete My Account</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <section class="profile-info">
        <a href="#">
            <div class="profile-img">
                @if ($user->profile->image)
                <img src="/storage/uploads/profile/{{$user->profile->image}}" alt="Profile Image">
                @else
                <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
                @endif

            </div>
        </a>
        <div class="profile-summary">
            <div class="profile-category">
                <p class="category-count">
                    {{count($user->posts)}}
                </p>
                <p class=" category-title">
                    Posts
                </p>
            </div>
            <div class="profile-category">
                <p class="category-count">
                    {{count($user->profile->followers)}}
                </p>
                <p class="category-title">
                    Followers
                </p>
            </div>
            <div class="profile-category">
                <p class="category-count">
                    {{count($user->following)}}
                </p>
                <p class="category-title">
                    Following
                </p>
            </div>
        </div>
    </section>
    <section class="profile-description">
        <p class="full-name">
            {{$user->name}}
        </p>
        <p class="description">
            {{$user->profile->bio ?? ""}}
        </p>
    </section>
    <div class="btn-container" id="app">
        @can('update', $user->profile)
        <a href="{{route('profile.edit',$user->id)}}">
            Edit Profile
        </a>
        @else
        <follow-component user-id="{{$user->id}}" follows="{{$follows}}">
        </follow-component>
        @endcan

    </div>
    <br>
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

    @foreach ($user->posts as $post)
    <div class="post-img">
        <a href="{{route('posts.show',$post->id)}}"><img src="/storage/uploads/posts/{{$post->image}}"></a>
    </div>
    @endforeach
</main>
@endsection

@section('scripts')
<script src="{{ mix('js/app.js') }}"></script>
@endsection
