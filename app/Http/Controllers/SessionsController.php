<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
       return view('sessions.create');
    }

    public function store() 
    {
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


      
        if (! auth()->attempt($attributes)) 
        {
            // auth failed
            throw ValidationException::withMessages([
                'email' => 'Your provided credentails could not be verified.'
            ]);
        }
        
        // attempt to auth and log in the user
        // based on the provided credentials 

        // session fixation !important!
        session()->regenerate();

        // redirect with a success flash message 
        return redirect('/')->with('success', 'Welcome Back!'); 

    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
