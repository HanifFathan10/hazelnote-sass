<nav class="nav">
    <a href="{{ route('home') }}" class="nav__header">
        <h1>Hazelnote</h1>
    </a>
    <form action="{{ route('account.logout') }}" method="GET">
        @csrf
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/img/user.jpeg') }}" alt="{{ asset('assets /img/user.jpeg') }}" width="30"
                height="30">
        </button>
        <ul class="dropdown-menu bg-info-subtle">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
        </ul>
    </form>
</nav>
