@extends('layouts.app')
@section('style')
<style type="text/css">
	table td {
		border: none !important;
	}
</style>
@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				Add new student
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('Student.index') }}">Back</a>
			</div>
		</div>
	</div>
	<hr>
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input. <br/><br/>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($student, ['method'=>'PATCH', 'route'=>['Student.update', $student->id]]) !!}

		@include('Student.form')

	{!! Form::close() !!}
@stop