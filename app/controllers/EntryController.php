<?php

class EntryController extends BaseController {

	/**
	 * The index page will check the user's session for an entry id.
	 * If no entry is found the page will prompt the user to enter
	 * their email and secret to view or edit an existing entry
	 * or click a link to create a new entry.
	 *
	 * @return Response
     */
    public function index()
    {
        $entry = $this->getEntry();

        if ($entry) {
			return View::make('entry.details')
						->with('entry', $entry);
    	}

        return View::make('entry.index');

    }

    /**
     * Loads an entry and puts the id into the session. 
     * Redirects to the index page with an error message if the entry
     * is not found.
     */
    public function load()
    {
    	$rules = array(
            'email' => 'required',
            'secret' => 'required',
        );

        $input = Input::get();
        
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return Redirect::route('entry.index')
                ->withInput()
                ->withErrors($validator);
        }

        $entry = Entry::where('email', $input['email'])->first();

        if ($entry && Hash::check($input['secret'], $entry->secret)) {

            $this->putEntryIdIntoSession($entry->id);
            return Redirect::route('entry.index');

        } 

        return Redirect::route('entry.index')
                ->withInput()
                ->withMessage("Sorry, couldn't find your entry. Please try again.");

    }

    /**
     * Shows a form to allow a new entry to be created. 
     */
    public function create()
    {
        if (Entry::canCreateOrEdit() === false) {
            return Redirect::route('entry.index')
                    ->withMessage("Sorry, the competition has now started and new entries cannot be created.");
        }

       return View::make('entry.create');
   }
        

    /**
     * Creates a new entry, puts the id into the session and
     * redirects back to the index page.
     */
    public function store()
    {
        if (Entry::canCreateOrEdit() === false) {
            return Redirect::route('entry.index')
                    ->withMessage("Sorry, the competition has now started and new entries cannot be created.");
        }

    	$input = Input::all();

    	$validator = Validator::make($input, Entry::$entry_rules);

        if ($validator->fails()) {
        	return Redirect::route('entry.create')
                ->withInput()
                ->withErrors($validator);
        }

        DB::beginTransaction();

        $entry = new Entry();
        $entry->email        = $input['email'];
        $entry->secret       = Hash::make($input['secret']);
        $entry->confirmation = uniqid('', true);
        $entry->first_name   = $input['first_name'];
        $entry->last_name    = $input['last_name'];
        $entry->peer_group   = $input['peer_group'];
        $entry->save();

        $matches = Match::all();

        foreach($matches as $match) {
            $match_prediction = new MatchPrediction();

            $match_prediction->team_a     = $match->team_a;
            $match_prediction->team_b     = $match->team_b;
            $match_prediction->pool       = $match->pool;
            $match_prediction->match_date = $match->match_date;
            
            $entry->matchPredictions()->save($match_prediction);
        }

        DB::commit();

        $this->sendConfirmationEmail($entry);

        $this->putEntryIdIntoSession($entry->id);

    	return View::make('entry.edit')
                    ->with('entry', $entry);
    }

    /**
     * Shows a form to allow an entry to be edited. 
     */
    public function edit()
    {
        if (Entry::canCreateOrEdit() === false) {
            return Redirect::route('entry.index')
                    ->withMessage("Sorry, the competition has now started and entries cannot be changed.");
        }

        $entry = $this->getEntry();

        if ($entry) {
            return View::make('entry.edit')
                        ->with('entry', $entry);
        }

        return Redirect::route('entry.index');
    }

    /**
     * Updates an entry's details. 
     */
    public function update()
    {
        if (Entry::canCreateOrEdit() === false) {
            return Redirect::route('entry.index')
                    ->withMessage("Sorry, the competition has now started and entries cannot be changed.");
        }

        $input = Input::all();

        $validator = Validator::make($input, Entry::$prediction_rules, Entry::$prediction_rules_messages);

        if ($validator->fails()) {
            return Redirect::route('entry.edit')
                ->withInput()
                ->withErrors($validator);
        }
            
        $entry = $this->getEntry();

        if ($entry) {

            $entry->update($input);
            $entry->save();

            foreach($entry->matchPredictions as $match_prediction) {
                $field = "match_prediction_$match_prediction->id";
                if (Input::has($field)) {
                    $match_prediction->result = Input::get($field);
                    $match_prediction->save();
                }
            }
        }

        return Redirect::route('entry.index');
    }

    /**
     * Confirms an entry to make it visible on the scoreboard. 
     */
    public function confirm($confirmation)
    {
        $entry = Entry::where('confirmation', $confirmation)->first();

        if ($entry) {
            
            $entry->confirmation = null;
            $entry->save();

            return View::make('entry.confirm');
        }

        return Redirect::route('entry.index')
                ->withMessage("Sorry, the entry could not be confirmed.");
    }





    // The key used to store the entry id in the session.
    private $session_key = 'entry.id';

    // Gets the entry id from the session
    private function getEntryIdFromSession()
    {
        return Session::get($this->session_key, 0);
    }

    // Puts the entry id into the session
    private function putEntryIdIntoSession($id)
    {
        Session::put($this->session_key, $id);
    }

    // Puts the entry id into the session
    private function removeEntryIdFromSession()
    {
        Session::forget($this->session_key);
    }

    // Gets the current entry if an id is set in the session.
    private function getEntry()
    {
        $entry_id = $this->getEntryIdFromSession();

        if ($entry_id > 0) {
            $entry = Entry::find($entry_id);
            if ($entry) return $entry;
            else $this->removeEntryIdFromSession();
        }

        return NULL;
    }

    // Send a confirmation email with a hyperlink the entrant must click
    // to make their entry visible on the scoreboard.
    private function sendConfirmationEmail($entry)
    {
        Mail::send(
            'emails.confirmation',
            array('entry' => $entry),
            function($message) use($entry) {
                $message
                    ->to($entry->email, $entry->fullName())
                    ->subject('RWC 2015 Competition Entry Confirmation');
            });
    }

}
