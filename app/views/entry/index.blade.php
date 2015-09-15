
@extends('layouts.default')

@section('content')

	<h1>Competition entry</h1>

	<div>
		<ul>
			<li>If you have already created an entry, you can use your email and secret to reload that entry.</li>
			<li>If the competition has started you will only be able to view the entry - not update it.</li>

			@if (Entry::canCreateOrEdit() === true)
			<li>If you have not already created an entry, use the button at the bottom to create one now.</li>
			@endif
			
			<li>Required fields are marked with an asterisk.</li>
		</ul>
	</div>

	
	<div class="form-horizontal">

		{{ Form::open(array('action' => 'EntryController@load')) }}

		<fieldset>
			<legend>Load an existing entry</legend>

			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			    {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label required')) }}
			    <div class="col-sm-4">
				    {{ Form::text(
				    		'email', null, 
				    		array(
				    			'aria-required' => 'true', 
				    			'class' => 'form-control col-sm-4', 
				    			'maxlength' => 50,
				    			'placeholder' => 'Enter your email address')) }}
	    		</div>	
			</div>

			<div class="form-group {{ $errors->has('secret') ? 'has-error' : '' }}">
			    {{ Form::label('secret', 'Secret', array('class' => 'col-sm-2 control-label required')) }}
			    <div class="col-sm-4">
			    {{ Form::password(
		    			'secret', 
		    			array(
		    				'aria-required' => 'true', 
		    				'class' => 'form-control col-sm-4', 
		    				'maxlength' => 50,
		    				'placeholder' => 'Enter your secret')) }}
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4 ">
				    {{ Form::submit('Load entry', array ('class' => 'btn btn-primary')) }} 
				</div>
			</div>
		
		</fieldset>

		@if (Entry::canCreateOrEdit() === true)
		<fieldset>
			<legend>Create a new entry</legend>
			{{ link_to_route('entry.create', 'New entry', $parameters = array(), $attributes = array('class' => 'btn btn-info')) }}
		</fieldset>
		@endif

		{{ Form::close() }}

	</div>

@stop