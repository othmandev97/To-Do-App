@extends('layout.app')

@section('title')
    Edit todo
@endsection

@section('content')
<h1 class="text-center my-5">Edit Todos</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header text-center">
                Edit Todo
            </div>
            <div class="card-body">                    
                @if($errors->any())
                    <p> 
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item">
                                <div class="alert alert-danger" role="alert">
                                {{$error}}
                                 </div>
                            </li> 
                            @endforeach
                        </ul>
                    </p>
                 @endif
                <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                    @csrf
                    <div class="form-group">
                    <input name="titlename" type="text" class="form-control" id="Input1" value="{{$todo->name}}">
                    </div>
                    <div class="form-group">
                    <textarea name="titledesc" class="form-control" id="Textarea1" cols="5" rows="5">{{$todo->description}}
                    </textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>  
    </div>   
</div>
@endsection