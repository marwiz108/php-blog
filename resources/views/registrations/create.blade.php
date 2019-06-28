@extends('layout')

@section('content')
    <h1>Register</h1>

    <form method="POST" action="/register"> 
        {{ csrf_field() }}

        <div>
            <label for="name">Name:</label>
            <input type="text" is="name" name="name">
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" is="email" name="email">
        </div>

        <br>

        <div>
            <label for="password">Password:</label>
            <input type="password" is="password" name="password">
        </div>

        <br>

        <button type="submit">Register</button>
    </form>
@endsection