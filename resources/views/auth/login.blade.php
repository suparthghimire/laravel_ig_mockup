@extends('layouts.guest')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection

@section('content')

<h1 class="logo" id="logo">
    Finsta
</h1>
<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
            id="name" value="{{ old('email') }}" autocomplete="email" autofocus />
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
            name="password" id="password" autocomplete="current-password" />
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="pwd-toggle">
            <a href="#" id="eye">
                <i class="fas fa-eye pwd-toggler"></i>
            </a>
            <span class="toggle-line" id="toggle-line"></span>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Log In" class="form-control button" />
    </div>
    <span class="small-detail-txt">
        Not Registered Still?
        <span class="small-bold-txt">
            <a class="text-white" href="{{route('register')}}">Sign Up to Finsta</a>
        </span>
    </span>
</form>
<div class="seperator">
    OR
</div>
<form>
    <div class="form-group">
        <input type="submit" value="Log In from Facebook" class="form-control button" />
    </div>
</form>
@endsection

@section('scripts')
<script src="{{asset('assets/js/login.js')}}"></script>
@endsection
