<nav class="navbar navbar-expand-md bg-success" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand text-white fs-1" href="">tiMovie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white fs-4" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-4" href="">Watchlist</a>
                </li>

            </ul>
        </div>
        <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2 bg-dark" type="search" name="query" placeholder="Search Movie" aria-label="Search">
            <button class="btn btn-outline-white bg-dark" type="submit">Search</button>
        </form>


    </div>

</nav>
