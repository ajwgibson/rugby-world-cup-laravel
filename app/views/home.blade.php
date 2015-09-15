@extends('layouts.default')


@section('extra_css')

@stop


@section('extra_js')

@stop


@section('content')

  	<div class="row">
		<div class="col-sm-12">
			<h1>Scoreboard</h1>
		</div>
	</div>

  	<div class="row">
		<div class="col-md-9">
		@if ($entries && count($entries)>0)
			<table class="table table-striped table-compact">
				<thead>
					<tr>
						<th>Score</th>
						<th>Name</th>
						<th>Email</th>
						<th>Peer Group</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($entries as $entry)
					<tr>
						<td><span class="badge">{{{ $entry->score }}}</span></td>
						<td>{{{ $entry->fullName() }}}</td>
						<td>{{{ $entry->email }}}</td>
						<td>{{{ $entry->peer_group }}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<p>No confirmed entries yet!</p>
		@endif
		</div>
	</div>

@stop
