@extends('layouts.user')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/addpost-index.css')}}">
@endsection

@section('content')
<header class="header">
    <h2 class="header-title">Activity</h2>
</header>
<main class="add-post">
    {{-- <form action="#" enctype="multipart/form-data"> --}}
    {{ Form::open(['route'=>'posts.store','files'=>true]) }}
    <div class="form-group">
        <p class="form-title">Choose Image</p>
        <label for="image" class="addimg-btn">
            Add Image
        </label>
        <input type="file" id="image" name="image" class="post-img-upload @error('image') is-invalid @enderror"
            value="Choose Image">
    </div>
    @error('image')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="form-group pb-0">
        <input type="text" id="caption" class="post-caption @error('caption') is-invalid @enderror" name="caption"
            placeholder="Write your Caption">
    </div>
    @error('caption')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="form-group no-border">
        <div class="socialmedia-container">
            <p>Add Post To</p>
            <div class="social-media">
                <p>Facebook</p>
                <div class="toggle-container">
                    <label for="facebook-cb">
                        <input type="checkbox" class="other-platform" name="facebook-cb" id="facebook-cb">
                        <div class="toggle-btn"></div>
                    </label>
                </div>
            </div>
            <div class="social-media">
                <p>Twitter</p>
                <div class="toggle-container">
                    <label for="twitter-cb">
                        <input type="checkbox" class="other-platform" name="twitter-cb" id="twitter-cb">
                        <div class="toggle-btn"></div>
                    </label>
                </div>
            </div>
            <div class="social-media">
                <p>Tumblr</p>
                <div class="toggle-container">
                    <label for="tumblr-cb">
                        <input type="checkbox" class="other-platform" name="tumblr-cb" id="tumblr-cb">
                        <div class="toggle-btn"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group no-border">
        <input type="submit" value="Share" class="post-share">
    </div>
    {{ Form::close() }}
</main>
@endsection
