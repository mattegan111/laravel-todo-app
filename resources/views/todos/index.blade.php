@extends('layouts.app')

@section('title')
Todos
@endsection

@section('content')
<h1 class="text-center my-5">Todos Page</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                    @if($todo->completed === 0)
                    <li class="list-group-item">
                        <a href="/todos/{{ $todo->id }}/complete" class="mx-1" style="float:left;text-decoration:none;color:#000000;"> 
                            {{ $todo->name }}
                        </a>

                        <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm mx-1" style="float:right"> 
                            Delete
                        </a>
                        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-success btn-sm mx-1" style="float:right"> 
                            Edit
                        </a>
                        <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm" style="float:right"> 
                            View
                        </a>
                    </li>
                    @endif
                    @endforeach
                    @foreach($todos as $todo)
                    @if($todo->completed === 1)
                    <li class="list-group-item">
                        <a href="/todos/{{ $todo->id }}/complete" class="mx-1" style="float:left;text-decoration:none;color:#aaaaaa;"> 
                            <del>{{ $todo->name }}</del>
                        </a>

                        <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm mx-1" style="float:right"> 
                            Delete
                        </a>
                        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-success btn-sm mx-1" style="float:right"> 
                            Edit
                        </a>
                        <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm" style="float:right"> 
                            View
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>    
    </div>
</div>

@endsection
