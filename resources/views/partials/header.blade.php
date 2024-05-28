<header class="container">
    <div><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></div>
    <div>
        <ul>
            <li>
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                    About
                </a>
            </li>
            @foreach($dccomics as $dccomic)
                <li><a href="#">{{ $dccomic['name'] }}</a></li>
            @endforeach
        </ul>
    </div>
</header>