<h3 class="underlined">Pool placings</h3>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<h4>Pool A</h4>
		<ol>
			<li>{{{ $entry->pa_1 }}}</li>
			<li>{{{ $entry->pa_2 }}}</li>
			<li>{{{ $entry->pa_3 }}}</li>
			<li>{{{ $entry->pa_4 }}}</li>
			<li>{{{ $entry->pa_5 }}}</li>
		</ol>
	</div>
	<div class="col-sm-6 col-md-3">
		<h4>Pool B</h4>
		<ol>
			<li>{{{ $entry->pb_1 }}}</li>
			<li>{{{ $entry->pb_2 }}}</li>
			<li>{{{ $entry->pb_3 }}}</li>
			<li>{{{ $entry->pb_4 }}}</li>
			<li>{{{ $entry->pb_5 }}}</li>
		</ol>
	</div>
	<div class="col-sm-6 col-md-3">
		<h4>Pool C</h4>
		<ol>
			<li>{{{ $entry->pc_1 }}}</li>
			<li>{{{ $entry->pc_2 }}}</li>
			<li>{{{ $entry->pc_3 }}}</li>
			<li>{{{ $entry->pc_4 }}}</li>
			<li>{{{ $entry->pc_5 }}}</li>
		</ol>
	</div>
	<div class="col-sm-6 col-md-3">
		<h4>Pool D</h4>
		<ol>
			<li>{{{ $entry->pd_1 }}}</li>
			<li>{{{ $entry->pd_2 }}}</li>
			<li>{{{ $entry->pd_3 }}}</li>
			<li>{{{ $entry->pd_4 }}}</li>
			<li>{{{ $entry->pd_5 }}}</li>
		</ol>
	</div>
</div>

<h3 class="underlined">Final 8 teams</h3>
<div class="row">
	<div class="col-sm-6 col-md-6">
		<ol>
			<li>{{{ $entry->f8_1 }}}</li>
			<li>{{{ $entry->f8_2 }}}</li>
			<li>{{{ $entry->f8_3 }}}</li>
			<li>{{{ $entry->f8_4 }}}</li>
		</ol>
	</div>
	<div class="col-sm-6 col-md-6">
		<ol start="5">
			<li>{{{ $entry->f8_5 }}}</li>
			<li>{{{ $entry->f8_6 }}}</li>
			<li>{{{ $entry->f8_7 }}}</li>
			<li>{{{ $entry->f8_8 }}}</li>
		</ol>
	</div>
</div>

<h3 class="underlined">Final 4 teams</h3>
<div class="row">
	<div class="col-sm-6 col-md-6">
		<ol>
			<li>{{{ $entry->f4_1 }}}</li>
			<li>{{{ $entry->f4_2 }}}</li>
		</ol>
	</div>
	<div class="col-sm-6 col-md-6">
		<ol start="3">
			<li>{{{ $entry->f4_3 }}}</li>
			<li>{{{ $entry->f4_4 }}}</li>
		</ol>
	</div>
</div>

<h3 class="underlined">Final 2 teams</h3>
<div class="row">
	<div class="col-sm-6 col-md-6">
		<ol>
			<li>{{{ $entry->f2_1 }}}</li>
		</ol>
	</div>
	<div class="col-sm-6 col-md-6">
		<ol start="2">
			<li>{{{ $entry->f2_2 }}}</li>
		</ol>
	</div>
</div>

<h3 class="underlined">The winner</h3>
<div style="margin: 20px; font-size: x-large;">
	<strong><em>{{{ $entry->winner }}}</em></strong>
</div>