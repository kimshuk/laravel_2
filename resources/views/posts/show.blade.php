@extends('layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <hr>

    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>{{$comment->created_at->diffForHumans()}}</strong>:

                    {{ $comment->body }}
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Add a comment --}}

    <hr>

    <div class="card">
        <div class="card-body">
            <form action="/posts/{{ $post->id }}/comments" method="POST">

                @csrf

                <div class="form-group">
                    <textarea name="body" id="" class="form-control" placeholder="You comment here" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add Comment</button>
                </div>
            </form>

            @include('layouts.errors')
        </div>
    </div>
@endsection