@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Edit Todo</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit todo</div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/todos/{{ $todo->id }}/update" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $todo -> name }}">
                    </div>
                    <div class="form-group">
                        <textarea cols="5" rows="5" class="form-control" name="description" placeholder="Description">{{ $todo -> description }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="completed" name="completed" value="1" @if($todo->completed === 1) checked @endif>
                        <label for="completed">Completed </label>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Edit Todo</button>
                        <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger">Delete</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection