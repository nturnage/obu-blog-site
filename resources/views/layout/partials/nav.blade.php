<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OBU Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Articles <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Secondary Page</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
			@if (Auth::check())
				<p class="navbar-text m-2 my-sm-0">{{ Auth::user()->name }}</p>
				<a class="btn m-2 my-sm-0" role="button" href="./logout">Logout</a>
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			@else
				<a class="btn m-2 my-sm-0" role="button" href="./login">Login</a>
				<a class="btn m-2 my-sm-0" role="button" href="./register">Register</a>
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			@endif
        </form>
    </div>
</nav>


