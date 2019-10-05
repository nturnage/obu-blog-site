@extends('layout.mainlayout')

@section('content')

    <div class="main-content">
        <div class="container">
            <h2>Add Blog Creator</h2>
            <form method="POST" action="/blog-creator">
				{{ csrf_field() }}
                <div class="form-group">
                    <label for="articleTitle">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
