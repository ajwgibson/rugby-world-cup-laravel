

<fieldset>
	<legend>Pool placings</legend>
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<h4>Pool A</h4>
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'pa_1', 'label' => '1', 'teams' => Entry::$pool_a_teams))
				@include('entry._team_selector', array('name' => 'pa_2', 'label' => '2', 'teams' => Entry::$pool_a_teams))
				@include('entry._team_selector', array('name' => 'pa_3', 'label' => '3', 'teams' => Entry::$pool_a_teams))
				@include('entry._team_selector', array('name' => 'pa_4', 'label' => '4', 'teams' => Entry::$pool_a_teams))
				@include('entry._team_selector', array('name' => 'pa_5', 'label' => '5', 'teams' => Entry::$pool_a_teams))
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Pool B</h4>
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'pb_1', 'label' => '1', 'teams' => Entry::$pool_b_teams))
				@include('entry._team_selector', array('name' => 'pb_2', 'label' => '2', 'teams' => Entry::$pool_b_teams))
				@include('entry._team_selector', array('name' => 'pb_3', 'label' => '3', 'teams' => Entry::$pool_b_teams))
				@include('entry._team_selector', array('name' => 'pb_4', 'label' => '4', 'teams' => Entry::$pool_b_teams))
				@include('entry._team_selector', array('name' => 'pb_5', 'label' => '5', 'teams' => Entry::$pool_b_teams))
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Pool C</h4>
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'pc_1', 'label' => '1', 'teams' => Entry::$pool_c_teams))
				@include('entry._team_selector', array('name' => 'pc_2', 'label' => '2', 'teams' => Entry::$pool_c_teams))
				@include('entry._team_selector', array('name' => 'pc_3', 'label' => '3', 'teams' => Entry::$pool_c_teams))
				@include('entry._team_selector', array('name' => 'pc_4', 'label' => '4', 'teams' => Entry::$pool_c_teams))
				@include('entry._team_selector', array('name' => 'pc_5', 'label' => '5', 'teams' => Entry::$pool_c_teams))
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Pool D</h4>
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'pd_1', 'label' => '1', 'teams' => Entry::$pool_d_teams))
				@include('entry._team_selector', array('name' => 'pd_2', 'label' => '2', 'teams' => Entry::$pool_d_teams))
				@include('entry._team_selector', array('name' => 'pd_3', 'label' => '3', 'teams' => Entry::$pool_d_teams))
				@include('entry._team_selector', array('name' => 'pd_4', 'label' => '4', 'teams' => Entry::$pool_d_teams))
				@include('entry._team_selector', array('name' => 'pd_5', 'label' => '5', 'teams' => Entry::$pool_d_teams))
			</div>
		</div>
	</div>
</fieldset>

<fieldset>
	<legend>Final 8 teams</legend>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'f8_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f8_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f8_3', 'label' => '3', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f8_4', 'label' => '4', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'f8_5', 'label' => '5', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f8_6', 'label' => '6', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f8_7', 'label' => '7', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f8_8', 'label' => '8', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
	</div>
</fieldset>

<fieldset>
	<legend>Final 4 teams</legend>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'f4_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f4_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'f4_3', 'label' => '3', 'teams' => Entry::getAllTeams()))
				@include('entry._team_selector', array('name' => 'f4_4', 'label' => '4', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
	</div>
</fieldset>

<fieldset>
	<legend>Final 2 teams</legend>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'f2_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'f2_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
	</div>
</fieldset>


<fieldset>
	<legend>The winner</legend>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				@include('entry._team_selector', array('name' => 'winner', 'label' => ' ', 'teams' => Entry::getAllTeams()))
			</div>
		</div>
	</div>
</fieldset>

