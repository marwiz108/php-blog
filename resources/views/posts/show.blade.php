@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <br>
    <hr>
    <br>

    <div>
        <strong>Comments:</strong>
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong>
                    {{ $comment->body }}
                </li>
            @endforeach
        </ul>
    </div>

    <br>

    <div>
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}

            <div>
                <textarea name="body" placeholder="Your comment here" required></textarea>
            </div>

            <button type="submit">Add comment</button>
        </form>
    </div>
@endsection