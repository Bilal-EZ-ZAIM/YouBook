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
                @if (session()->has('user_id') && session()->get('user_id') == 3)
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}"
                        href="{{ url('/profile/admin') }}">Dash Bord</a>
                </li>
                 @endif
                @if (session()->has('user_id'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                            href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('aboutes') ? 'active' : '' }}"
                            href="{{ url('/livers/acheter/data') }}">livers Reserver</a>
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
