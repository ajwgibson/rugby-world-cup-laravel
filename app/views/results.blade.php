@extends('layouts.default')


@section('extra_css')

@stop


@section('extra_js')

@stop


@section('content')

	<h1>Competition results</h1>

	<p>Please check that the results have been recorded correctly.</p>

	<h3>Match results</h3>

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
				<td>{{{ $match->result }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	@if ($entry)
	@include('entry._entry_details', array('entry' => $entry))
	@endif

@stop