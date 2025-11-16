<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/black.png') }}" alt="Logo" style="height:40px;"></a>

    <ul class="navbar-nav ml-auto">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
        <a href="{{ route('acc') }}" class="nav-link">Account</a>
        <a href="{{ route('members') }}" class="nav-link">Members</a>
    </ul>
</nav>
