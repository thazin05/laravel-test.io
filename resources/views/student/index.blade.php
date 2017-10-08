@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="pull-left">
			<h2>Student CRUD</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('Student.create') }}">Create Student</a>
		</div>
	</div>

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Gender</th>
			<th>Date of Birth</th>
			<th>Place of Birth</th>
			<th>Phone</th>
			<!-- <th>Subject</th>
			<th>Price</th>
			<th>Shift</th>
			<th>Year</th>
			<th>Level</th> -->
			<th>Action</th>
		</tr>
		@foreach($students as $student)
			<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $student->FirstName ." ". $student->LastName }}</td>
			<td>
				@if($student->Gender == 1)
					Male
				@else
					Female
				@endif
			</td>
			<td>{{ date('jS F Y', strtotime($student->DOB)) }}</td>
			<td>{{ $student->POB }}</td>
			<td>{{ $student->Phone }}</td>
			<!-- <td>{{ $student->SubjectName }}</td>
			<td>{{ $student->Price }}</td>
			<td>{{ $student->Shift }}</td>
			<td>{{ $student->Year }}</td>
			<td>{{ $student->Level }}</td> -->
			<td>
				<a class="btn btn-info" href="{{ route('Student.show', $student->id) }}">Show</a>
				<a class="btn btn-primary" href="{{ route('Student.edit', $student->id) }}">Edit</a>
				{!! Form::open(['method'=>'DELETE', 'route'=>['Student.destroy', $student->id], 'style'=>'display:inline']) !!}
					{!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</table>
	{!! $students->render() !!}
@stop