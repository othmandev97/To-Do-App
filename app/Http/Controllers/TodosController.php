<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //
    public function index(){
        //fetch all todos from database

        // display them in todos
        $todos = Todo::all();

        return view('todos.index')->with('todoslist', $todos);
    }

//! route model binding 
    public function show(Todo $todo){
        // $todos = Todo::find($todoId);

        return view('todos.show')->with('todo', $todo);
    }
 
    public function create(){
        return view('todos.create');
    }

    public function store(){
        // dd(request()->all());

        $this->validate(request(), [
            'titlename'  => 'required',
            'titledesc' => 'required'   
        ]);

         $data = request()->all();

         $todo = new Todo();
         $todo->name = $data['titlename'];
         $todo->description = $data['titledesc'];
         $todo->completed = false;

         $todo->save();

         session()->flash('success', 'Todo created successfully.');

         return redirect('/todos');
    }


    public function edit($todoId){

        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo', $todo);
    }

    public function update($todoId){
        $this->validate(request(), [
            'titlename' => 'required',
            'titledesc' => 'required' 
        ]);

        $data = request()->all();

        $todo = Todo::find($todoId);

        $todo->name = $data['titlename'];
        $todo->description = $data['titledesc'];

        $todo->save();

        session()->flash('success', 'Todo updated successfully.');

        return redirect('/todos');
 
    }

    public function destroy($todoId){
        $todo = Todo::find($todoId);

        $todo->delete();

        session()->flash('success', 'Todo deleted successfully.');

        return redirect('/todos');
    }
    
    public function complete(Todo $todo){

        $todo->completed = true;

        $todo->save();

        session()->flash('success', 'Todo completed successfully.');

        return redirect('/todos');
 
    }
}
