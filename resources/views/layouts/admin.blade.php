<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/admin') }}">Admin Panel</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="form-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>
