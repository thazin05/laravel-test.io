<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<table class="table">
			<tr>
				<td>First Name</td>
				<td>{!! Form::text('FirstName', null, array('placeholder'=>'Enter FirstName', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td>{!! Form::text('LastName', null, array('placeholder'=>'Enter LastName', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>{!! Form::select('Gender', [true=>'Male', false => 'Female'], null, ['class'=> 'form-control']) !!}</td>
			</tr>
			<tr>
				<td>DOB</td>
				<td>{!! Form::date('DOB', null, array('placeholder'=>'Enter DOB', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>POB</td>
				<td>{!! Form::text('POB', null, array('placeholder'=>'Enter POB', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>{!! Form::text('Phone', null, array('placeholder'=>'Enter Phone', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Subject</td>
				<td>{!! Form::text('SubjectName', null, array('placeholder'=>'Enter Subject', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Priec</td>
				<td>{!! Form::text('Price', null, array('placeholder'=>'Enter Price', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Shift</td>
				<td>{!! Form::text('Shift', null, array('placeholder'=>'Enter Shift', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Year</td>
				<td>{!! Form::text('Year', null, array('placeholder'=>'Enter Year', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td>Level</td>
				<td>{!! Form::text('Level', null, array('placeholder'=>'Enter Level', 'class'=>'form-control')) !!}</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<button type="submit" class="btn btn-primary">Submit</button>
				</td>
			</tr>
		</table>
	</div>
</div>