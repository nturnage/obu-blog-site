@extends('layout.mainlayout')

@section('content')

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a href="/create-post" class="btn btn-primary btn-lg">Create New Post</a>
                </div>

                <div class="col-md-6 text-center">
                    <!-- Check to make sure this works when these changes are merged into master branch -->
                    <a href="/blogcreator/create" class="btn btn-secondary btn-lg">Create New Blogger</a>
                </div>
            </div>
        </div>


    </div>
@endsection
