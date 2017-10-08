@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Show Product</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('Student.index') }}">Back</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Name</strong>
				{{ $student->FirstName ." ". $student->LastName }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Gender</strong>
				@if($student->Gender == 1)
					Male
				@else
					Female
				@endif
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Date of Birth</strong>
				{{ $student->DOB }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Place of Birth</strong>
				{{ $student->POB }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Phone</strong>
				{{ $student->Phone }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Subject</strong>
				{{ $student->SubjectName }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Price</strong>
				{{ $student->Price }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Shift</strong>
				{{ $student->Shift }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Year</strong>
				{{ $student->Year }}
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<strong>Level</strong>
				{{ $student->Level }}
			</div>
		</div>
	</div>
@stop