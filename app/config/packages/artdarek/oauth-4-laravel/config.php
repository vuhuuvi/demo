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
        'Facebook' => array(
            'client_id'     => '822327187885921',
            'client_secret' => '82ecafa468d72bd893a2c7744411f816',
            'scope'         =>  array('email','user_birthday'),
        ),		

	)

);