@extends('layouts.default')

@section('content')

	<h1>Administration</h1>

	<fieldset>
		<legend>Recalulate the scores for each entry</legend>

		{{ Form::open(array('action' => 'AdminController@score')) }}

		<div class="form-horizontal">

	        <div class="form-group">
	        	<div class="col-sm-6">
		            <label for="send_notifications" class="control-label">
	                {{ Form::checkbox('send_notifications', 1, false) }} Notify contestants by email</label>
	            </div>
	        </div>

	        <div class="form-group">
        		<div class="col-sm-6">
	        		{{ Form::submit('Calculate scores', array ('class' => 'btn btn-primary')) }} 
	        	</div>
	        </div>

		</div>

		{{ Form::close() }}

	</fieldset>

	<fieldset>
		<legend>Update the group match results</legend>

		{{ link_to_route(
				'admin.matches', 
				'Match results', 
				$parameters = array(), 
				$attributes = array('class' => 'btn btn-primary')) }}

	</fieldset>

	<fieldset>
		<legend>Update the admin entry</legend>

		{{ link_to_route(
				'admin.entry', 
				'Admin entry', 
				$parameters = array(), 
				$attributes = array('class' => 'btn btn-primary')) }}

	</fieldset>

@stop