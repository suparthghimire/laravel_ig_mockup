@extends('layouts.user')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/edit-profile.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/addpost-index.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection

@section('content')
{{Form::model($user,['route'=>['profile.update',$user->id],'method'=>'POST','files'=>true])}}
@csrf
@method('PATCH')
<header class="header d-flex justify-content-bt w-100 align-items-center">
    <div class="header-wrapper d-flex align-items-center w-45 justify-content-bt">
        <a href=" #" class="text-white">
            <i class="fas fa-times text-md"></i>
        </a>
        <h2 class="header-title">Edit Profile</h2>
    </div>
    <div>
        <a href="#" action="process.php" class="text-primary">
            <label for="submit"><i class="fas fa-check text-md"></i></label>
            <input type="submit" value="Submit" class="d-none" id="submit" />
        </a>
    </div>
</header>
<main class="edit mt-30">
    <div class="profile-img-container w-100 d-flex flex-column align-items-center">
        <div class="profile-img">
            @if ($user->profile->image)
            <img src="/storage/uploads/profile/{{$user->profile->image}}" alt="Profile Image">
            @else
            <img src="{{asset('assets/img/default/default.jpg')}}" alt="Profile Image">
            @endif
        </div>
        <p class="ptb-10 w-100 text-center">
            <label for="image" class="text-primary lp-1 d-block">
                Change Profile Picture
            </label>
            <input type="file" name="image" class="d-none" name="image" id="image" />
        </p>
    </div>
    <p class="text-white prl-20 font-weight-bold lp-1 mtb-20">
        Profile Information
    </p>
    <div class="form-container">
        <div class="edit-form-group d-flex flex-column p-20">
            <input type="text" id="name" class="edit-form-control ptb-10" value="{{auth()->user()->name}}" required />
            <label for="name" class="edit-form-label">Name</label>
        </div>
        <div class="edit-form-group d-flex flex-column p-20">
            <input type="text" name="bio" value="{{old('bio')??$user->profile->bio}}" id="bio"
                class="edit-form-control ptb-10" required />
            <label for="bio" name="bio" class="edit-form-label">Bio</label>
        </div>
    </div>
</main>
{{Form::close()}}
</div>

@endsection

@section('scripts')
<script src="{{asset('assets/js/login.js')}}"></script>
@endsection
