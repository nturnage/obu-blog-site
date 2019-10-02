@extends('layout.mainlayout')

@section('content')

    <div class="main-content">
        <div class="container">
            <h2>Create a New Article:</h2>
            <form>
                <div class="form-group">
                    <label for="articleTitle">Title</label>
                    <input type="text" class="form-control" id="articleTitle" aria-describedby="titleHelp" placeholder="Enter Article Title">
                </div>
                <div class="form-group">
                    <label for="articleAuthor">Author</label>
                    <input type="text" class="form-control" id="articleAuthor" aria-describedby="authorHelp" placeholder="Enter Author Name">
                </div>
                <div class="form-group">
                    <label for="articleText">Article Text</label>
                    <textarea class="form-control" id="ArticleText" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
