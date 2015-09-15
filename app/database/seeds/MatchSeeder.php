<?php

class MatchSeeder extends Seeder {

	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('matches')->delete();

		Match::create(array('team_a' => 'England',         'team_b' => 'Fiji',         'pool' => 'A', 'match_date' => new DateTime('2015-09-18')));

		Match::create(array('team_a' => 'Tonga',           'team_b' => 'Georgia',      'pool' => 'C', 'match_date' => new DateTime('2015-09-19')));
		Match::create(array('team_a' => 'Ireland',         'team_b' => 'Canada',       'pool' => 'D', 'match_date' => new DateTime('2015-09-19')));
		Match::create(array('team_a' => 'South Africa',    'team_b' => 'Japan',        'pool' => 'B', 'match_date' => new DateTime('2015-09-19')));
		Match::create(array('team_a' => 'France',          'team_b' => 'Italy',        'pool' => 'D', 'match_date' => new DateTime('2015-09-19')));

		Match::create(array('team_a' => 'Samoa',           'team_b' => 'USA',          'pool' => 'B', 'match_date' => new DateTime('2015-09-20')));
		Match::create(array('team_a' => 'Wales',           'team_b' => 'Uruguay',      'pool' => 'A', 'match_date' => new DateTime('2015-09-20')));
		Match::create(array('team_a' => 'New Zealand',     'team_b' => 'Argentina',    'pool' => 'C', 'match_date' => new DateTime('2015-09-20')));

		Match::create(array('team_a' => 'Scotland',        'team_b' => 'Japan',        'pool' => 'B', 'match_date' => new DateTime('2015-09-23')));
		Match::create(array('team_a' => 'Australia',       'team_b' => 'Fiji',         'pool' => 'A', 'match_date' => new DateTime('2015-09-23')));
		Match::create(array('team_a' => 'France',          'team_b' => 'Romania',      'pool' => 'D', 'match_date' => new DateTime('2015-09-23')));

		Match::create(array('team_a' => 'New Zealand',     'team_b' => 'Namibia',      'pool' => 'C', 'match_date' => new DateTime('2015-09-24')));

		Match::create(array('team_a' => 'Argentina',       'team_b' => 'Georgia',      'pool' => 'C', 'match_date' => new DateTime('2015-09-25')));

		Match::create(array('team_a' => 'Italy',           'team_b' => 'Canada',       'pool' => 'D', 'match_date' => new DateTime('2015-09-26')));
		Match::create(array('team_a' => 'South Africa',    'team_b' => 'Samoa',        'pool' => 'B', 'match_date' => new DateTime('2015-09-26')));
		Match::create(array('team_a' => 'England',         'team_b' => 'Wales',        'pool' => 'A', 'match_date' => new DateTime('2015-09-26')));

		Match::create(array('team_a' => 'Australia',       'team_b' => 'Uruguay',      'pool' => 'A', 'match_date' => new DateTime('2015-09-27')));
		Match::create(array('team_a' => 'Scotland',        'team_b' => 'USA',          'pool' => 'B', 'match_date' => new DateTime('2015-09-27')));
		Match::create(array('team_a' => 'Ireland',         'team_b' => 'Romania',      'pool' => 'D', 'match_date' => new DateTime('2015-09-27')));

		Match::create(array('team_a' => 'Tonga',           'team_b' => 'Namibia',      'pool' => 'C', 'match_date' => new DateTime('2015-09-29')));

		Match::create(array('team_a' => 'Wales',           'team_b' => 'Fiji',         'pool' => 'A', 'match_date' => new DateTime('2015-10-01')));
		Match::create(array('team_a' => 'France',          'team_b' => 'Canada',       'pool' => 'D', 'match_date' => new DateTime('2015-10-01')));

		Match::create(array('team_a' => 'New Zealand',     'team_b' => 'Georgia',      'pool' => 'C', 'match_date' => new DateTime('2015-10-02')));

		Match::create(array('team_a' => 'Samoa',           'team_b' => 'Japan',        'pool' => 'B', 'match_date' => new DateTime('2015-10-03')));
		Match::create(array('team_a' => 'South Africa',    'team_b' => 'Scotland',     'pool' => 'B', 'match_date' => new DateTime('2015-10-03')));
		Match::create(array('team_a' => 'England',         'team_b' => 'Australia',    'pool' => 'A', 'match_date' => new DateTime('2015-10-03')));

		Match::create(array('team_a' => 'Argentina',       'team_b' => 'Tonga',        'pool' => 'C', 'match_date' => new DateTime('2015-10-04')));
		Match::create(array('team_a' => 'Ireland',         'team_b' => 'Italy',        'pool' => 'D', 'match_date' => new DateTime('2015-10-04')));

		Match::create(array('team_a' => 'Canada',          'team_b' => 'Romania',      'pool' => 'D', 'match_date' => new DateTime('2015-10-06')));
		Match::create(array('team_a' => 'Fiji',            'team_b' => 'Uruguay',      'pool' => 'A', 'match_date' => new DateTime('2015-10-06')));

		Match::create(array('team_a' => 'South Africa',    'team_b' => 'USA',          'pool' => 'B', 'match_date' => new DateTime('2015-10-07')));
		Match::create(array('team_a' => 'Namibia',         'team_b' => 'Georgia',      'pool' => 'C', 'match_date' => new DateTime('2015-10-07')));

		Match::create(array('team_a' => 'New Zealand',     'team_b' => 'Tonga',        'pool' => 'C', 'match_date' => new DateTime('2015-10-09')));

		Match::create(array('team_a' => 'Samoa',           'team_b' => 'Scotland',     'pool' => 'B', 'match_date' => new DateTime('2015-10-10')));
		Match::create(array('team_a' => 'Australia',       'team_b' => 'Wales',        'pool' => 'A', 'match_date' => new DateTime('2015-10-10')));
		Match::create(array('team_a' => 'England',         'team_b' => 'Uruguay',      'pool' => 'A', 'match_date' => new DateTime('2015-10-10')));

		Match::create(array('team_a' => 'Argentina',       'team_b' => 'Namibia',      'pool' => 'C', 'match_date' => new DateTime('2015-10-11')));
		Match::create(array('team_a' => 'Italy',           'team_b' => 'Romania',      'pool' => 'D', 'match_date' => new DateTime('2015-10-11')));
		Match::create(array('team_a' => 'France',          'team_b' => 'Ireland',      'pool' => 'D', 'match_date' => new DateTime('2015-10-11')));
		Match::create(array('team_a' => 'USA',             'team_b' => 'Japan',        'pool' => 'B', 'match_date' => new DateTime('2015-10-11')));
	}

}
