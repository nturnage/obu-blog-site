<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OBU Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Posts <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
				@can('create new post')
					<a class="nav-link" href="/create-post">Create a Post</a>
				@endcan
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
			@if (Auth::check())
				<p class="navbar-text m-2 my-sm-0">{{ Auth::user()->name }}</p>
				@can('create new post')
					<a class="btn m-2 my-sm-0" role="button" href="/dashboard">Dashboard</a>
				@endcan
				<a class="btn m-2 my-sm-0" role="button" href="/logout">Logout</a>
			@else
				<a class="btn m-2 my-sm-0" role="button" href="/login">Login</a>
				<a class="btn m-2 my-sm-0" role="button" href="/register">Register</a>
			@endif
        </form>
    </div>
</nav>


