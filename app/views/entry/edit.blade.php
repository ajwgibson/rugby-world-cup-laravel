
@extends('layouts.default')

@section('content')

	<h1>Make your predictions</h1>

	{{ Form::model($entry, array('action' => 'EntryController@update')) }}

	<fieldset>
		<legend>Predict the group match results</legend>

		<table class="table table-striped table-compact">
			<thead>
				<tr>
					<th>Date</th>
					<th>Pool</th>
					<th>Team A</th>
					<th>Team B</th>
					<th>Result</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($entry->matchPredictions->sortBy('match_date') as $match_prediction)
				<tr>
					<td>{{{ $match_prediction->match_date }}}</td>
					<td>{{{ $match_prediction->pool }}}</td>
					<td>{{{ $match_prediction->team_a }}}</td>
					<td>{{{ $match_prediction->team_b }}}</td>
					<td>
						{{ Form::select(
							"match_prediction_$match_prediction->id",
							array(
								'Draw' => 'Draw', 
								"$match_prediction->team_a" => "$match_prediction->team_a",
								"$match_prediction->team_b" => "$match_prediction->team_b"),
							$match_prediction->result,
							array('class' => 'form-control')) }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</fieldset>

	@include('entry._entry_edit', array('entry' => $entry))

	<div class="row" style="padding-top: 20px;">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-8">
						{{ Form::submit('Save predictions', array ('class' => 'btn btn-primary')) }} 
					</div>
				</div>
			</div>
		</div>
	</div>

	{{ Form::close() }}


@stop