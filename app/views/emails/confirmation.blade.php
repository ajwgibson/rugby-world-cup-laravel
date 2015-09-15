<body style="font-family: sans-serif;">

    <p>
    	Your entry has been created and you can fill in your predictions straight away, but you
    	must click the following link to make your entry visible on the scoreboard.
    </p>
    
    <p>
    	{{ link_to_route(
    			'entry.confirm',
    			'Use this link to ensure your entry is visible on the competition scoreboard',
    			$parameters = array('confirmation' => $entry->confirmation),
    			$attributes = array()) }}
    </p>

</body>
