@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-danger">Go Back</a>
<br>
<br>
<h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
<div class="badge badge-danger">{{$todo->due}}</div>
<hr>
<p>{{$todo->body}}</p>
<br>
<br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-success">Edit</a>
{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-warning']) }}
{!! Form::close() !!}
@endsection