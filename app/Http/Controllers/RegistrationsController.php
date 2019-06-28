<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' =>'required|email',
            'password' => 'required'
        ]);

        // Create user
        $user = User::create(request(['name', 'email', 'password']));

        // Sign them in
        auth()->login($user);

        // Redirect to home page
        return redirect('/posts');
    }
}
