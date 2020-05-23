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

        <div class="notification-wrapper">
            <ul class="notification-list">
                @foreach (auth()->user()->unreadNotifications as $notification)
                <li class="notification-item">
                    <a href="#" class="notification-link">
                        <div class="profile-img">
                            @if ($notification->data['user_image'])
                            <img src="/storage/uploads/profile/{{$notification->data['user_image']}}"
                                alt="Profile Image">
                            @else
                            <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
                            @endif

                        </div>
                        <div class="notification-info">
                            <p>
                                <span class="profile-name text-sm">
                                    {{$notification->data['user_name']}}
                                </span>
                                <span class="d-block text-sm">
                                    liked your post
                                </span>
                            </p>
                        </div>
                        <div class="post-img">
                            <img src="/storage/uploads/posts/{{$notification->data['post_image']}}" alt="">
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</main> @endsection
