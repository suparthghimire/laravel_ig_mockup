<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>
    <div class="slideIn">
        @yield('content')
    </div>
    @include('partials._scripts')
    <footer class="footer">
        @include('partials._footer')
    </footer>
</body>

</html>
