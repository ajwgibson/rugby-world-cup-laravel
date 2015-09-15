@extends('layouts.default')

@section('content')

	<h1>Login</h1>

	{{ Form::open() }}

		<div class="form-horizontal">

		    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
		        {{ Form::label('username', 'Username', array ('class' => 'col-sm-2 control-label')) }}
		        <div class="col-sm-4">
		            {{ Form::text('username', '', array ('class' => 'form-control')) }}
		        </div>
		    </div>

		    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
		        {{ Form::label('password', 'Password', array ('class' => 'col-sm-2 control-label')) }}
		        <div class="col-sm-4">
		            {{ Form::password('password', array ('class' => 'form-control')) }}
		        </div>
		    </div>

		    <div class="col-sm-offset-2">
		        {{ Form::submit('Login', array ('class' => 'btn btn-primary')) }} 
		    </div>

		</div>

	{{ Form::close() }}

@stop
