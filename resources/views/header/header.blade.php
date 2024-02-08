<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Your School Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bilanox') ? 'active' : '' }}"
                        href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutes') ? 'active' : '' }}" href="{{ url('aboutes') }}">About
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}"
                        href="{{ url('/profile/admin') }}">Dash Bord</a>
                </li>
                @if (session()->has('user_id'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                            href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('aboutes') ? 'active' : '' }}"
                            href="{{ url('/livers/acheter/data') }}">livers acheter</a>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link">Session ID: {{ session('user_id') }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}"
                            href="{{ url('/profile/admin') }}">livers acheter</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}"
                            href="{{ url('/profile/creat') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('register') ? 'active' : '' }}"
                            href="{{ url('/profile/register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
