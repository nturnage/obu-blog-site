@extends('layout.partials.comment-section')

@section('comments')
    <ul class="media-list">
        <li class="media">
            <a href="#" class="pull-left">
                <img src="/img/generic-user.png" alt="Photo of User" class="img-circle">
            </a>
            <div class="media-body">
                                        <span class="text-muted pull-right">
                                            <small class="text-muted">Time of Comment</small>
                                        </span>
                <strong class="text-success">@Username</strong>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                </p>
            </div>
        </li>
    </ul>
@endsection
