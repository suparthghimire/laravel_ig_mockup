@extends('layouts.user') @section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}" />
@endsection @section('content')




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
                            <img src="assets/img/stories/add_new_stories.png" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="assets/img/stories/suparth.jpg" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="assets/img/stories/siddharth.jpg" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="assets/img/stories/susmita.jpg" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="assets/img/stories/suresh.jpg" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="assets/img/stories/susmita.jpg" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
            <li class="story-item">
                <div class="story-content">
                    <div class="story-img">
                        <a href="#" class="story-link">
                            <img src="assets/img/stories/sabitra.jpg" alt="Add new Story" />
                        </a>
                    </div>
                    <p class="story-user-name">Your Name</p>
                </div>
            </li>
        </ul>
    </section>
</header>
<main class="posts">
    <div id="welcome">
        <welcome-component v-for='post in posts' :username=post.user.name :userimage=post.user.profile.image
            :postimage=post.image :postid=post.id :postcaption=post.caption :postcomments=post.comments
            :userid=post.user.id :postlikes=post.likes :userlikes=auth>
        </welcome-component>

    </div>
</main>
@endsection

@section('scripts')
<script src="{{asset('assets/js/welcome.js')}}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@endsection
