@extends('layouts.user')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/notification-index.css')}}">
@endsection


@section('content')


<header class="header">
    <h2 class="header-title">Activity</h2>
</header>
<main class="notifications">
    <div class="notification-container">
        <p class="day-indicator">
            Yesterday
        </p>
        <div class="notification-wrapper">
            <ul class="notification-list">
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, neque!
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, neque!
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="notification-container">
        <p class="day-indicator">
            This Week
        </p>
        <div class="notification-wrapper margin-bottom">
            <ul class="notification-list">
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet!
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet consectetur adipisicing!
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="img/posts/posts.jpg" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name">
                                    suparth.ghimire
                                </span>
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="{{asset('assets/img/posts/posts.jpg')}}" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</main>

@endsection
