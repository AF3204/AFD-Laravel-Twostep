<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Google' => array(
            'client_id'     => '862022077102-sct4e8f1ial2f7ktt0ut8b3tuhlhquvh.apps.googleusercontent.com',
            'client_secret' => 'YM7zsaBQk1o47hc6W2fmmdFi',
            'redirect_url'	=> 'https://www.example.com/oauth2callback',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),		

	)

);