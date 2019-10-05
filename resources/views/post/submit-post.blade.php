@extends('layout.mainlayout')

@section('content')

    <div class="main-content">
        <div class="container">
            <h2>Create a New Post:</h2>
            <form method="POST" action="/posts">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="postTitle" aria-describedby="titleHelp" placeholder="Enter Post Title">
                </div>
                <div class="form-group">
                    <label for="postAuthor">Author</label>
                    <input type="text" class="form-control" name="author" id="postAuthor" aria-describedby="authorHelp" placeholder="Enter Author Name">
                </div>
                <div class="form-group">
                    <label for="postText">Post Content</label>
                    <textarea class="form-control" name="content" id="PostText" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
