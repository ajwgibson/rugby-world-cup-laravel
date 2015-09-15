<?php

class MatchPrediction extends Eloquent {
	
	/**
	 * Relationship to entry.
	 */
	public function entry()
    {
        return $this->belongsTo('Entry');
    }
}