@extends('layout')

@section('content')
    <h1>Create a new post</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required>
        </div>

        <br>

        <div>
            <label for="body">Body:</label><br>
            <textarea id="body" name="body" required></textarea>
        </div>

        <br>

        <button type="submit">Publish</button>
    </form>
@endsection