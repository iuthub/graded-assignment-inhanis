@extends('layouts.main')
@section('content')
<h3>Tasks</h3>

<ul class="myUL">
	@if(count($tasks)>0)
	@foreach($tasks as $task)
	<li><div class="task">
		<a href="/tasks/{{$task->id}}">{{$task->body}}</a>
		</div>
		<div class="action">
		<a href="/task/edit"><i class="fa fa-edit"></i></a>
		</div>
		<div class="action">
		<a href=""><i class="fa fa-trash-alt"></i></a>
		</div>
	</li>
	@endforeach
	@else
		<p>No tasks</p>
	@endif
</ul>
<a href="task.newTask">New</a>
@endsection