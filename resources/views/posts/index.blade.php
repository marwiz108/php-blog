@extends ('layout')

@section ('content')
    <h1>My Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li><a href='/posts/{{ $post->id }}'>
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection