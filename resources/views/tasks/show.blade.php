@extends('layouts.main')

@section('content')
	
	<h1>{{$task->title}}</h1>
	<div>
		<h2>{{$task->body}}</h2>
	</div>
	<hr>
	<small>Added on {{$task->created_at}}</small>
	<hr>
	<a href="/tasks/{{$task->id}}/edit" class="addBtn">Edit</a>

	<a href="/tasks/{{$task->id}}/destroy" class="addBtn">Delete</a>
	
	<br><br><br>
	<a href="/tasks" class="">Go To List</a>
@endsection