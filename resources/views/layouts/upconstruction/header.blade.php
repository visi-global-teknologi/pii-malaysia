<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>{{ ucwords(config('app.name')) }}</h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i> <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('news.index') }}">News</a></li>
                <li><a href="{{ route('emagazines.index') }}">Emagazine</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>
</header>
