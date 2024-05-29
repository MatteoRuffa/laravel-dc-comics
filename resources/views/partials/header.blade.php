<header class="container">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </a>
    </div>
    <div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('comics.index') }}">Comics</a></li>
        </ul>
    </div>
</header>
