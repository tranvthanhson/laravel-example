<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function store(TodoRequest $request)
    {
        $payload = $request->only(['content']);
        if ($request->has('is_completed')) {
            $payload['is_completed'] = 1;
        }
        Todo::create($payload);
        return redirect(route('todos.index'));
    }
}
