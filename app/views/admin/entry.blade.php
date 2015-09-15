@extends('layouts.default')

@section('content')

	<h1>Update admin entry</h1>

	{{ Form::model($entry) }}

	@include('entry._entry_edit', array('entry' => $entry))

	<div class="row" style="padding-top: 20px;">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-8">
						{{ Form::submit('Save entry', array ('class' => 'btn btn-primary')) }} 
					</div>
				</div>
			</div>
		</div>
	</div>

	{{ Form::close() }}

@stop