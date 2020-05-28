@extends('layouts.user') @section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}" />
@endsection @section('content')



{{-- <div id="welcome">
    <welcome-component></welcome-component>
</div>
 --}}
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


{{-- <header class="header" id="header">
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
                            <img src="{{asset('assets/img/stories/add_new_stories.png')}}" alt="Add new Story" />
</a>
</div>
<p class="story-user-name">Your Name</p>
</div>
</li>
<li class="story-item">
    <div class="story-content">
        <div class="story-img">
            <a href="#" class="story-link">
                <img src="{{asset('assets/img/stories/suparth.jpg')}}" alt="Add new Story" />
            </a>
        </div>
        <p class="story-user-name">Your Name</p>
    </div>
</li>
<li class="story-item">
    <div class="story-content">
        <div class="story-img">
            <a href="#" class="story-link">
                <img src="{{asset('assets/img/stories/siddharth.jpg')}}" alt="Add new Story" />
            </a>
        </div>
        <p class="story-user-name">Your Name</p>
    </div>
</li>
<li class="story-item">
    <div class="story-content">
        <div class="story-img">
            <a href="#" class="story-link">
                <img src="{{asset('assets/img/stories/susmita.jpg')}}" alt="Add new Story" />
            </a>
        </div>
        <p class="story-user-name">Your Name</p>
    </div>
</li>
<li class="story-item">
    <div class="story-content">
        <div class="story-img">
            <a href="#" class="story-link">
                <img src="{{asset('assets/img/stories/suresh.jpg')}}" alt="Add new Story" />
            </a>
        </div>
        <p class="story-user-name">Your Name</p>
    </div>
</li>
<li class="story-item">
    <div class="story-content">
        <div class="story-img">
            <a href="#" class="story-link">
                <img src="{{asset('assets/img/stories/susmita.jpg')}}" alt="Add new Story" />
            </a>
        </div>
        <p class="story-user-name">Your Name</p>
    </div>
</li>
<li class="story-item">
    <div class="story-content">
        <div class="story-img">
            <a href="#" class="story-link">
                <img src="{{asset('assets/img/stories/sabitra.jpg')}}" alt="Add new Story" />
            </a>
        </div>
        <p class="story-user-name">Your Name</p>
    </div>
</li>
</ul>
</section>
</header>

<main class="posts">
    @if (count($posts)<=0) <div class="screen-center">
        <p class="text-center">
            Woops! Looks Like You Donot Follow Anyone!
            <br />Follow Some Users to see posts here
        </p>
        </div>
        @else @foreach ($posts as $post)
        <div class="post-wrapper">
            <div class="post-header">
                <div class="profile-info">
                    <div class="story-img profile-img">
                        @if ($post->user->profile->image)
                        <img src="/storage/uploads/profile/{{$post->user->profile->image}}" alt="Profile Image" />
                        @else
                        <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image" />
                        @endif
                    </div>
                    <span class="profile-name post-profile-name">
                        <a href="{{route('profile.index',$post->user->id)}}"
                            class="text-white">{{$post->user->name}}</a>
                    </span>
                </div>
            </div>
            <div class="post-img">
                <img src="/storage/uploads/posts/{{$post->image}}" alt="" />
            </div>
            <div class="post-action">
                <div class="post-action-left">
                    <ul class="action-list">
                        <li class="action-item" id="likeBtn">
                            {!!
                            Form::open(['route'=>['like',$post->id],'method'=>'post'])
                            !!}
                            <button class="button" id="button">
                                @if(App\Like::where(['user_id'=>auth()->user()->id,'post_id'=>$post->id])->get()->count()!=0)
                                <i id="like" class="fas fa-heart red"></i>
                                @else
                                <i id="like" class="far fa-heart white"></i>
                                @endif
                            </button>
                            {!! Form::close() !!}
                        </li>
                        <li class="action-item">
                            <a href="{{route('comments.show',$post->id)}}" class="action-link"><i
                                    class="far fa-comment"></i></a>
                        </li>
                        <li class="action-item">
                            <a href="#" class="action-link"><i class="fas fa-paper-plane"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="post-likes">{{$post->likes->count()}} Likes</p>
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
                    <a href="{{route('comments.show',$post->id)}}" class="text-white text-sm">This post Has No Comments.
                        Add One?</a>
                    @else
                    <a href="{{route('comments.show',$post->id)}}" class="text-white text-sm mtb-10">View all
                        {{$post->comments->count()}} Comments and Add one
                        Here</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach @endif
</main> --}}

@endsection

@section('scripts')
<script src="{{asset('assets/js/welcome.js')}}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@endsection
