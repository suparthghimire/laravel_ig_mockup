@extends('layouts.guest')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection

@section('content')



<div class="container">
    <h1 class="logo" id="logo">
        Finsta
    </h1>

    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class=" form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name"
                id="name" value="{{ old('name') }}" autocomplete="name" autofocus />

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                name="email" value="{{ old('email') }}" autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="Password">

            <div class="pwd-toggle">
                <a href="#" id="eye">
                    <i class="fas fa-eye pwd-toggler"></i>
                </a>
                <span class="toggle-line" id="toggle-line"></span>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                placeholder="Re Enter Password" autocomplete="new-password">
        </div>
        <div class="form-group">
            <input type="submit" value="Register" class="form-control button" />
        </div>
        <span class="small-detail-txt">
            Already Have an Account?
            <span class="small-bold-txt">
                <a href="{{route('login')}}" class="text-white">Log In to Finsta</a>
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
</div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/login.js')}}"></script>
@endsection
