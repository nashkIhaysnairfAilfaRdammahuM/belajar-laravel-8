<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Rafli Blog</a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="{{ ($title === "Home") ? 'page' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" aria-current="{{ ($title === "About") ? 'page' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "All Posts") ? 'active' : '' }}" aria-current="{{ ($title === "All Posts") ? 'page' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Post Categories") ? 'active' : '' }}" aria-current="{{ ($title === "Post Categories") ? 'page' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
        </div>
    </div>
</nav>