<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Rafli Blog</a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="{{ ($active === "home") ? 'page' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" aria-current="{{ ($active === "about") ? 'page' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" aria-current="{{ ($active === "All Posts") ? 'page' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" aria-current="{{ ($active === "Post Categories") ? 'page' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
        </div>
    </div>
</nav>