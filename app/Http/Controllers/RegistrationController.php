<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }

    //Validate the form
    public function store() {
        $this->validate(\request(), [
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required|confirmed'
        ]);

        //Create and save the user
        $user = User::create([
            'name' => \request('name'),
            'email' => \request('email'),
            'password' => bcrypt(\request('password'))
        ]);

        //\request()->session()->flash('status', 'Task was successful!');

        session()->flash('message', 'Your registration to TodoApp was successfull.');

        \Mail::to($user)->send(new Welcome());

        return view('sessions.create');
    }
}
