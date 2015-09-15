<?php

class Entry extends Eloquent {

    const GROUP_MATCH_SCORE         = 1;
    const GROUP_PLACE_SCORE         = 1;
    const GROUP_PLACE_PERFECT_SCORE = 2;
    const FINAL_EIGHT_SCORE         = 2;
    const FINAL_FOUR_SCORE          = 4;
    const FINAL_TWO_SCORE           = 6;
    const WINNER_SCORE              = 8;


	// Mass Assignment
    protected $fillable = array(

		'pa_1', 'pa_2', 'pa_3', 'pa_4', 'pa_5',
		'pb_1', 'pb_2', 'pb_3', 'pb_4', 'pb_5',
		'pc_1', 'pc_2', 'pc_3', 'pc_4', 'pc_5',
		'pd_1', 'pd_2', 'pd_3', 'pd_4', 'pd_5',

		'f8_1', 'f8_2', 'f8_3', 'f8_4', 'f8_5', 'f8_6', 'f8_7', 'f8_8',

		'f4_1', 'f4_2', 'f4_3', 'f4_4',

		'f2_1', 'f2_2',

		'winner'
    );


    // Validation

    public static $entry_rules = array(
        'email'      => 'required|email|max:100|unique:entries,email',
        'first_name' => 'required|max:100',
        'last_name'  => 'required|max:100',
        'secret'     => 'required|confirmed|min:6'
    );

    public static $prediction_rules = array(
        'pa_1' => 'required', 'pa_2' => 'required', 'pa_3' => 'required', 'pa_4' => 'required', 'pa_5' => 'required',
        'pb_1' => 'required', 'pb_2' => 'required', 'pb_3' => 'required', 'pb_4' => 'required', 'pb_5' => 'required',
        'pc_1' => 'required', 'pc_2' => 'required', 'pc_3' => 'required', 'pc_4' => 'required', 'pc_5' => 'required',
        'pd_1' => 'required', 'pd_2' => 'required', 'pd_3' => 'required', 'pd_4' => 'required', 'pd_5' => 'required',

        'f8_1' => 'required', 'f8_2' => 'required', 'f8_3' => 'required', 'f8_4' => 'required',
        'f8_5' => 'required', 'f8_6' => 'required', 'f8_7' => 'required', 'f8_8' => 'required',

        'f4_1' => 'required', 'f4_2' => 'required', 'f4_3' => 'required', 'f4_4' => 'required',

        'f2_1' => 'required', 'f2_2' => 'required',

        'winner'  => 'required'
    );

    public static $prediction_rules_messages = array(
        
        'pa_1.required' => 'The Pool A, Position 1 prediction is required', 
        'pa_2.required' => 'The Pool A, Position 2 prediction is required', 
        'pa_3.required' => 'The Pool A, Position 3 prediction is required', 
        'pa_4.required' => 'The Pool A, Position 4 prediction is required',
        'pa_5.required' => 'The Pool A, Position 5 prediction is required',
        'pb_1.required' => 'The Pool B, Position 1 prediction is required', 
        'pb_2.required' => 'The Pool B, Position 2 prediction is required', 
        'pb_3.required' => 'The Pool B, Position 3 prediction is required', 
        'pb_4.required' => 'The Pool B, Position 4 prediction is required',
        'pb_5.required' => 'The Pool B, Position 5 prediction is required',
        'pc_1.required' => 'The Pool C, Position 1 prediction is required', 
        'pc_2.required' => 'The Pool C, Position 2 prediction is required', 
        'pc_3.required' => 'The Pool C, Position 3 prediction is required', 
        'pc_4.required' => 'The Pool C, Position 4 prediction is required',
        'pc_5.required' => 'The Pool C, Position 5 prediction is required',
        'pd_1.required' => 'The Pool D, Position 1 prediction is required', 
        'pd_2.required' => 'The Pool D, Position 2 prediction is required', 
        'pd_3.required' => 'The Pool D, Position 3 prediction is required', 
        'pd_4.required' => 'The Pool D, Position 4 prediction is required',
        'pd_5.required' => 'The Pool D, Position 5 prediction is required',
        
        'f8_1.required' => 'The final 8, team 1 prediction is required', 
        'f8_2.required' => 'The final 8, team 2 prediction is required', 
        'f8_3.required' => 'The final 8, team 3 prediction is required', 
        'f8_4.required' => 'The final 8, team 4 prediction is required', 
        'f8_5.required' => 'The final 8, team 5 prediction is required', 
        'f8_6.required' => 'The final 8, team 6 prediction is required', 
        'f8_7.required' => 'The final 8, team 7 prediction is required', 
        'f8_8.required' => 'The final 8, team 8 prediction is required',

        'f4_1.required' => 'The final 4, team 1 prediction is required', 
        'f4_2.required' => 'The final 4, team 2 prediction is required', 
        'f4_3.required' => 'The final 4, team 3 prediction is required', 
        'f4_4.required' => 'The final 4, team 4 prediction is required',

        'f2_1.required' => 'The final 2, team 1 prediction is required', 
        'f2_2.required' => 'The final 2, team 2 prediction is required',

        'winner.required'  => 'The winner prediction is required'
    );


    // The teams in the various pools
    public static $pool_a_teams = array(
    	'Australia'  => 'Australia', 
    	'England'    => 'England', 
    	'Wales'      => 'Wales', 
        'Fiji'       => 'Fiji',
    	'Paraguay'   => 'Paraguay',
	);
    public static $pool_b_teams = array(
    	'South Africa' => 'South Africa', 
    	'Samoa'        => 'Samoa', 
    	'Japan'        => 'Japan', 
        'Scotland'     => 'Scotland',
    	'USA'          => 'USA'
	);
	public static $pool_c_teams = array(
    	'New Zealand' => 'New Zealand', 
        'Argentina'   => 'Argentina', 
    	'Tonga'       => 'Tonga', 
    	'Georgia'     => 'Georgia', 
    	'Namibia'     => 'Namibia'
	);
	public static $pool_d_teams = array(
    	'France'    => 'France', 
        'Ireland'   => 'Ireland', 
        'Italy'     => 'Italy', 
        'Canada'    => 'Canada', 
        'Romania'   => 'Romania'
	);

    /**
     * Relationship to many match predictions.
     */
    public function matchPredictions()
    {
        return $this->hasMany('MatchPrediction');
    }

	/**
	 * Returns all the teams in the competition sorted naturaly.
	 */
	public static function getAllTeams() 
    {

        $all_teams = 
			self::$pool_a_teams
			+ self::$pool_b_teams
			+ self::$pool_c_teams
			+ self::$pool_d_teams;

        natsort($all_teams);

        return $all_teams;
	}

    /**
     * Returns a true or false value to indicate if this
     * entry can be edited or not.
     *
     * This is based on a cut-off date that is, in turn, based
     * on the date and time of the first group match of the 2014 World Cup.
     */
    public static function canCreateOrEdit() 
    {
    	$cutoff = strtotime('18-09-2015 18:00:00'); // GMT rather than local time (BST)
    	$now = time();

    	if ($now < $cutoff) return true;
    	return false;
    }

    /**
     * Returns the entrant's full name as a single string.
     */
    public function fullName()
    {
        return "$this->first_name $this->last_name";
    }

    /**
     * Returns the entrant's full name and email (in brackets) as a single string.
     */
    public function fullNameAndEmailAddress()
    {
        $full_name = $this->fullName();
        return "$full_name ($this->email)";
    }

    /**
     * A query scope to return confirmed entries only.
     */
    public function scopeConfirmed($query)
    {
        return $query->whereNull('confirmation');
    }

    /**
     * Calculates the score for this entry.
     */
    public function calculateScore()
    {
        // Start with the group matches
        $score = $this->calculateMatchPredictionsScore();

        $admin_entry = Entry::where('email', 'admin')->first();
        if ($admin_entry) {
            $score = $score + $this->calculateGroupPredictionsScore($admin_entry);
            $score = $score + $this->calculateFinalEightScore($admin_entry);
            $score = $score + $this->calculateFinalFourScore($admin_entry);
            $score = $score + $this->calculateFinalTwoScore($admin_entry);
            $score = $score + $this->calculateWinnerScore($admin_entry);
        }

        $this->score = $score;
        $this->save();
    }

    /**
     * Calculates the score for this entry's match predictions.
     */
    private function calculateMatchPredictionsScore()
    {
        $score = 0;

        foreach ($this->matchPredictions as $match_prediction) {

            $match = Match::where('team_a', $match_prediction->team_a)
                                ->where('team_b', $match_prediction->team_b)
                                ->first();

            if ($match && $match->result && $match->result == $match_prediction->result) $score = $score + self::GROUP_MATCH_SCORE;
        }

        return $score;
    }

    /**
     * Calculates the score for this entry's group ranking predictions.
     */
    private function calculateGroupPredictionsScore($admin_entry)
    {
        $pa_score = 0;
        if ($this->pa_1 && $this->pa_1 == $admin_entry->pa_1) $pa_score = $pa_score + self::GROUP_PLACE_SCORE;
        if ($this->pa_2 && $this->pa_2 == $admin_entry->pa_2) $pa_score = $pa_score + self::GROUP_PLACE_SCORE;
        if ($this->pa_3 && $this->pa_3 == $admin_entry->pa_3) $pa_score = $pa_score + self::GROUP_PLACE_SCORE;
        if ($this->pa_4 && $this->pa_4 == $admin_entry->pa_4) $pa_score = $pa_score + self::GROUP_PLACE_SCORE;
        if ($this->pa_5 && $this->pa_5 == $admin_entry->pa_5) $pa_score = $pa_score + self::GROUP_PLACE_SCORE;

        if ($pa_score == (5 * self::GROUP_PLACE_SCORE)) $pa_score = $pa_score + self::GROUP_PLACE_PERFECT_SCORE;

        $pb_score = 0;
        if ($this->pb_1 && $this->pb_1 == $admin_entry->pb_1) $pb_score = $pb_score + self::GROUP_PLACE_SCORE;
        if ($this->pb_2 && $this->pb_2 == $admin_entry->pb_2) $pb_score = $pb_score + self::GROUP_PLACE_SCORE;
        if ($this->pb_3 && $this->pb_3 == $admin_entry->pb_3) $pb_score = $pb_score + self::GROUP_PLACE_SCORE;
        if ($this->pb_4 && $this->pb_4 == $admin_entry->pb_4) $pb_score = $pb_score + self::GROUP_PLACE_SCORE;
        if ($this->pb_5 && $this->pb_5 == $admin_entry->pb_5) $pb_score = $pb_score + self::GROUP_PLACE_SCORE;

        if ($pb_score == (5 * self::GROUP_PLACE_SCORE)) $pb_score = $pb_score + self::GROUP_PLACE_PERFECT_SCORE;

        $pc_score = 0;
        if ($this->pc_1 && $this->pc_1 == $admin_entry->pc_1) $pc_score = $pc_score + self::GROUP_PLACE_SCORE;
        if ($this->pc_2 && $this->pc_2 == $admin_entry->pc_2) $pc_score = $pc_score + self::GROUP_PLACE_SCORE;
        if ($this->pc_3 && $this->pc_3 == $admin_entry->pc_3) $pc_score = $pc_score + self::GROUP_PLACE_SCORE;
        if ($this->pc_4 && $this->pc_4 == $admin_entry->pc_4) $pc_score = $pc_score + self::GROUP_PLACE_SCORE;
        if ($this->pc_5 && $this->pc_5 == $admin_entry->pc_5) $pc_score = $pc_score + self::GROUP_PLACE_SCORE;

        if ($pc_score == (5 * self::GROUP_PLACE_SCORE)) $pc_score = $pc_score + self::GROUP_PLACE_PERFECT_SCORE;

        $pd_score = 0;
        if ($this->pd_1 && $this->pd_1 == $admin_entry->pd_1) $pd_score = $pd_score + self::GROUP_PLACE_SCORE;
        if ($this->pd_2 && $this->pd_2 == $admin_entry->pd_2) $pd_score = $pd_score + self::GROUP_PLACE_SCORE;
        if ($this->pd_3 && $this->pd_3 == $admin_entry->pd_3) $pd_score = $pd_score + self::GROUP_PLACE_SCORE;
        if ($this->pd_4 && $this->pd_4 == $admin_entry->pd_4) $pd_score = $pd_score + self::GROUP_PLACE_SCORE;
        if ($this->pd_5 && $this->pd_5 == $admin_entry->pd_5) $pd_score = $pd_score + self::GROUP_PLACE_SCORE;

        if ($pd_score == (5 * self::GROUP_PLACE_SCORE)) $pd_score = $pd_score + self::GROUP_PLACE_PERFECT_SCORE;

        return $pa_score + $pb_score + $pc_score + $pd_score;
    }

    /**
     * Calculates the score for this entry's final 8 predictions.
     */
    private function calculateFinalEightScore($admin_entry)
    {
        $entry_eight = array_filter(
            array(
                $this->f8_1, 
                $this->f8_2, 
                $this->f8_3, 
                $this->f8_4,
                $this->f8_5, 
                $this->f8_6, 
                $this->f8_7, 
                $this->f8_8));

        $admin_entry_eight = array_filter( 
            array(
                $admin_entry->f8_1, 
                $admin_entry->f8_2, 
                $admin_entry->f8_3, 
                $admin_entry->f8_4,
                $admin_entry->f8_5, 
                $admin_entry->f8_6, 
                $admin_entry->f8_7, 
                $admin_entry->f8_8));

        $correct_predictions = array_intersect($admin_entry_eight, $entry_eight);

        return count($correct_predictions) * self::FINAL_EIGHT_SCORE;
    }

    /**
     * Calculates the score for this entry's final 4 predictions.
     */
    private function calculateFinalFourScore($admin_entry)
    {
        $entry_four = array_filter(
            array(
                $this->f4_1, 
                $this->f4_2, 
                $this->f4_3, 
                $this->f4_4));

        $admin_entry_four = array_filter(
            array(
                $admin_entry->f4_1, 
                $admin_entry->f4_2, 
                $admin_entry->f4_3, 
                $admin_entry->f4_4));

        $correct_predictions = array_intersect($admin_entry_four, $entry_four);

        return count($correct_predictions) * self::FINAL_FOUR_SCORE;
    }

    /**
     * Calculates the score for this entry's final 2 predictions.
     */
    private function calculateFinalTwoScore($admin_entry)
    {
        $entry_two = array_filter(
            array(
                $this->f2_1, 
                $this->f2_2));

        $admin_entry_two = array_filter(
            array(
                $admin_entry->f2_1, 
                $admin_entry->f2_2));

        $correct_predictions = array_intersect($admin_entry_two, $entry_two);

        return count($correct_predictions) * self::FINAL_TWO_SCORE;
    }

    /**
     * Calculates the score for this entry's winner prediction.
     */
    private function calculateWinnerScore($admin_entry)
    {
        if ($admin_entry->winner && ($admin_entry->winner == $this->winner)) return self::WINNER_SCORE;
        return 0;
    }

}