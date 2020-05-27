@extends('layouts.user')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('assets/css/search.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/notification-index.css')}}" />
@endsection

@section('content')


<div id="search">
    <search-component></search-component>
</div>

@endsection

@section('scripts')
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('assets/js/search.js') }}"></script>
@endsection
