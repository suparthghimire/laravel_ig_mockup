@extends('layouts.user')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/home-index.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/addpost-index.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/comment.css')}}" />
@endsection

@section('content')
<header class="header">
    <div class="header-wrapper d-flex align-items-center w-30 justify-content-bt">
        <a href="{{route('back')}}" class="text-white">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2 class="header-title ml-20">Comments </h2>
    </div>
</header>
<ul class="comments-list p-20">
    @foreach ($post->comments as $comment)
    <li class="text-white comments-item d-flex align-items-center justify-content-bt ptb-10">
        <div class="profile-info">
            <div class="story-img profile-img">
                @if ($comment->user->profile->image)
                <img src="/storage/uploads/profile/{{$comment->user->profile->image}}" alt="Profile Image">
                @else
                <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
                @endif
            </div>
            <span class="profile-name post-profile-name">
                <a href="{{route('profile.index',$comment->user->id)}}" class="text-white">{{$comment->user->name}}</a>
                <span class="comment-comment text-sm font-weight-light">{{$comment->comments}}</span>
            </span>
        </div>
        <div class="time text-sm text-right w-20 d-flex flex-column">
            {{-- <a href="#" class="text-white text-md"><i class="fas fa-ellipsis-h"></i></a> --}}
            {{date('d M',strtotime($comment->created_at))}}
        </div>
    </li>
    @endforeach
</ul>
<ul class="comments-list p-20">
    <li class="text-white comments-item d-flex align-items-center justify-content-bt ">
        <div class="profile-info">
            <div class=" story-img profile-img">
                @if (auth()->user()->profile->image)
                <img src="/storage/uploads/profile/{{auth()->user()->profile->image}}" alt="Profile Image">
                @else
                <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
                @endif
            </div>
            {!! Form::open(['route'=>['comments.store',$post->id]]) !!}
            <div class=" d-flex align-items-center justify-content-bt comment-group">
                <input type="text" id="comments" class="comment-input @error('comments') is-invalid @enderror"
                    placeholder="Add a new Comment" name="comments">
                <button class="comment-btn"><i class="fas fa-play"></i></button></div>
            {!! Form::close() !!}

        </div>

    </li>
</ul>
<div class="d-block p-20">
    @error('comments')
    <span class="invalid-feedback d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

</div>

@endsection
