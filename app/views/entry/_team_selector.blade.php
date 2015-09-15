
<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, $label, array('class' => 'col-sm-1 control-label')) }}
    <div class="col-sm-8 col-md-8">
	    {{ Form::select(
	    		$name, 
	    		array('' => 'Select...') + $teams, 
	    		null,
	    		array('class' => 'form-control')) }}
	</div>	
</div>
