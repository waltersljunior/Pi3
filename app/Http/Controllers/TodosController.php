<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId)
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit($todoId)
    {
        return view('todos.edit')->with('todo', Todo::find($todoId));
    }

    public function newstore()
    {
        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->desc = $data['desc'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('/todos');
    }

    public function store($todoId)
    {
        $data = request()->all();
        $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->desc = $data['desc'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');

    }

    public function Vstore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'bail|required',
            'text' => 'required',
        ]);

    }
}
