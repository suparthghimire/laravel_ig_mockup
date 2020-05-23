<ul class="footer-list">
    <li class="footer-item">
        <a href="{{route('index')}}" class="footer-link">
            <i class="fas fa-home"></i>
        </a>
    </li>
    <li class="footer-item">
        <a href="search.html" class="footer-link">
            <i class="fas fa-search"></i>
        </a>
    </li>
    <li class="footer-item">
        <a href="{{route('posts.create')}}" class="footer-link">
            <i class="fas fa-plus-circle"></i>
        </a>
    </li>
    <li class="footer-item">
        <a href="{{route('notification.index')}}" class="footer-link">
            <i class="far fa-heart"></i>
            @if (auth()->user()->unreadNotifications->count()!=0)
            <span class="notification"></span>
            @endif

        </a>
    </li>
    <li class="footer-item">
        <a href="{{route('profile.index',auth()->user()->id)}}" class="footer-link">
            <div class="profile-icon">
                <img src="{{asset('assets/img/profiles/profile.jpg')}}" alt="">
            </div>
        </a>
    </li>
</ul>
