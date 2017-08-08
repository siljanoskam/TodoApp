<?php

namespace App\Http\Controllers;

use App\Todo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TodosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // samo avtenticirani korisnici kje imat access do metodite podolu
    }

    // SHOW TODOS
    public function index() {

        $todos = Todo::latest()->where('user_id', Auth::id())->get();
        return view('todos.index', compact('todos'));

    }

    public function create() {
        return view('todos.create');
    }

    public function store() {

        $this->validate(\request(),[
            'todo' => 'required'
        ]);

        $isDone = request('isDone');

        if($isDone == null) {
            $isDone = false;
        }
        elseif ($isDone == "on") {
            $isDone = true;
        }

        $data = request()->input();

        $data["isDone"] = $isDone;
        auth()->user()->todos()->create($data);

        session()->flash('message', 'Your Todo was successfully added!');
        return redirect('/todos');

    }

    public function edit($id) {

        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update($id) {

        $todo = Todo::find($id);
        $isDone = \request('isDone');

        if($isDone == null) {
            $isDone = false;
        }
        elseif ($isDone == "on") {
            $isDone = true;
        }

        $todo->todo = \request('todo');
        $todo->isDone = $isDone;
        $todo->save();

        session()->flash('message', 'Todo was successfully updated!');
        return redirect('/todos');

    }

    public function delete($id) {

        Todo::find($id)->delete();

        session()->flash('message', 'Todo was successfully deleted!');
        return redirect('/todos');
    }
}
