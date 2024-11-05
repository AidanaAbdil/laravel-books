<nav>
    <a href="/">Home</a>
    <a href="/about-us" class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About</a>


    @if(Auth::check())
    <form action="{{ route('logout') }}" method="post">

        @csrf

        <input type="submit" value="Log out">


    </form>
        <p>Currently logged in as {{Auth::user()->name}}</p>

    @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>

    @endif
</nav>