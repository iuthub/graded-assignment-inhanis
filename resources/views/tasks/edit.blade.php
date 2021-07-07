@extends('layouts.main')

@section('content')
	<div>
		<h2>{{$task->body}}</h2>
	</div>
	<small>Added on {{$task->created_at}}</small>
	<small>Last Update {{$task->updated_at}}</small>
<hr>
<a href="/tasks/{{$task->id}}/destroy" class="addBtn">Delete</a>

	<br><br><br>
	<a href="/tasks" class="">Go To List</a>
@endsection