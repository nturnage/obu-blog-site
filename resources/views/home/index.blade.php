@extends('layout.mainlayout')

@section('content')

    <div class="main-content">
        <div class="container">
            @foreach($posts as $post)
            <div class="content">
                <h3>{{$post->title}}</h3>
                <p class="text-right">{{$post->created_at}}</p>
                <p>{{$post->content}}</p>
                <h6 class="text-right">--{{$post->author}}</h6>
                <a class="btn btn-primary read-more-btn" href="/posts/{{$post->id}}" role="button">Read More...</a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
