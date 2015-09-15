@extends('layouts.default')

@section('content')

	<h1>Update match results</h1>

	{{ Form::open() }}

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
			@foreach ($matches->sortBy('match_date') as $match)
			<tr>
				<td>{{{ $match->match_date }}}</td>
				<td>{{{ $match->pool }}}</td>
				<td>{{{ $match->team_a }}}</td>
				<td>{{{ $match->team_b }}}</td>
				<td>
					{{ Form::select(
						"match_$match->id",
						array(
							'' => '',
							'Draw' => 'Draw', 
							"$match->team_a" => "$match->team_a",
							"$match->team_b" => "$match->team_b"),
						$match->result,
						array('class' => 'form-control')) }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="row" style="padding-top: 20px;">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-12">
						{{ Form::submit('Save results', array ('class' => 'btn btn-primary')) }} 
					</div>
				</div>
			</div>
		</div>
	</div>

	{{ Form::close() }}

@stop