@extends('layouts.default')


@section('extra_css')

@stop


@section('extra_js')

@stop


@section('content')

	<h1>Instructions &amp; rules</h1>

    <p>Welcome to our World Cup competition!</p>

    <p>
    	If you want to join in, use the "Competition Entry" link at the top of the page
    	to add or edit your tournament predictions. All you'll need are:
    	<ul>
    		<li>A valid email address.</li>
    		<li>An ability to guess (sorry predict) the outcome of the various stages of
    		    the tournament.</li>
		</ul>
	</p>

	<p>
		Your predictions fall into the following categories:
		<ol>
			<li>Predict the results of the individual matches in the group stage.</li>
			<li>Predict the placing of teams within their groups at the end of the group stage.</li>
			<li>Predict the teams that will progress to the final 8.</li>
			<li>Predict the teams that will progress to the final 4.</li>
			<li>Predict the teams that will progress to the final 2.</li>
			<li>Predict the team that will win the tournament.</li>
		</ol>
	</p>
	
	<p>
		<em><strong>Warning! </strong> Be careful with the entry form - it's not clever and won't 
		stop you creating a nonsensical entry or contradicting yourself by picking the same team twice 
		or predicting a tournament winner you didn't even think would reach the last 8 based on your 
		group rankings. Obviously it should be smarter, but there just wasn't time - sorry.</em>
	</p>
		
	<p>
		Scores are calculated as follows:
		<ul>
			<li>1 point for each correct group match prediction.</li>
			<li>1 point for each team in the right place in their group.</li>
			<li>2 bonus points if you get a group completely correct.</li>
			<li>2 points for each team correctly predicted in the final 8.</li>
			<li>4 points for each team correctly predicted in the final 4.</li>
			<li>6 points for each team correctly predicted in the final 2.</li>
			<li>8 points for correctly predicting the winner.</li>
		</ul>
	</p>

@stop
