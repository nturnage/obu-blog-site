@extends('layout.mainlayout')

@section('content')

    <div class="main-content">
    <div class="container">
        <h2 class="text-center">{{$post->title}}</h2>
        <h6 class="text-right">Posted: {{$post->created_at}}</h6>
        <h5 class="text-right">By: {{$post->author}}</h5>
        <hr>
        <div class=my-3></div>

        <div class="content">
            <p>{{$post->content}}</p>
        </div>

        <div class="text-right">
            <button class="btn like-button"><i class="far fa-thumbs-up"></i></button>
            <p>{{$post->likes}} likes</p>
        </div>

        <hr>

        @include('layout.partials.comment-section')

    </div>
</div>
@endsection
