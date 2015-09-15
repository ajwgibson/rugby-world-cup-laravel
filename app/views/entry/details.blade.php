@extends('layouts.default')

@section('content')

	<h1>Competition entry details</h1>
	<p style="margin-bottom: 20px; font-size: large;">
		<em><strong>{{{ $entry->fullNameAndEmailAddress() }}}</strong></em>
	</p>

	<div>
	@if (Entry::canCreateOrEdit())
		{{ link_to_route(
				'entry.edit', 
				'Change my predictions', 
				$parameters = array(),
				$attributes = array('class' => 'btn btn-primary')) }}
	@endif
	</div>

	<h3 class="underlined">Pool matches</h3>
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
				<td>{{{ $match_prediction->result }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	@include('entry._entry_details', array('entry' => $entry))

@stop