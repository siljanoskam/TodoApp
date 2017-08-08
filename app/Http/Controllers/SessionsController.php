<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);  // samo guests kje imat access do metodite podolu
    }

    public function create() {
        return view('sessions.create');
    }

    public function store() {
        //Probaj da go avtenticirash korisnikot
        if (!auth()->attempt(request(['email', 'password']))) {

            //Ako nema takov korisnik, redirect back, ako ima se najavuva (attempt)
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);

        }

        //Redirect to home page
        return redirect('/');
    }

    public function destroy() {

        $name = auth()->user()->name;

        auth()->logout();

        session()->flash('message', 'Goodbye, ' . $name);
        return redirect('/');
    }
}
