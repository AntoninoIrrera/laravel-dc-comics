<header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Comics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'admin.home') active text-danger @endif" aria-current="page" href="{{route('admin.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'admin.index') active text-danger @endif" href="{{route('admin.index')}}">index</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="{{route('guest.home')}}" class="ms-3 btn btn-primary">Guest</a>
            </div>
        </div>
    </nav>


</header>