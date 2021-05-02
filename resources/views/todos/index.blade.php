@extends('layout.app')

@section('title')
todos    
@endsection
@section('content')
    <h1 class="text-center my-5">Todos Page</h1>
    <div class="row justify-content-center">    
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header text-center">
                    <p>all todos you have</p>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                    @foreach ($todoslist as $todo)
                        <li class="list-group-item">
                            {{ $todo->name }}

                            @if($todo->completed)
                                <span class="badge badge-pill badge-info">completed</span>
                            @elseif(!$todo->completed)
                             <a href="/todos/{{$todo->id}}/completed" class="btn btn-warning btn-sm mx-1 float-right">complete</a>
                            @endif

                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">view</a>
                            <a href="/todos/{{$todo->id}}/edit" class="btn btn-success btn-sm mx-1 float-right">Edit</a> 
                            <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm mx-1 float-right">Delete</a> 
                        </li>
                    @endforeach
                    </ul>
                </div>

            </div>   
        </div>
    </div>
@endsection