<?php namespace Socialh4ck\Twitter;

use Config;

class Twitter extends \Socialh4ck\Twitter\BaseTwitter {

	/**
	 * Default constructor
	 *
	 * @param string $consumerKey    The consumer key to use.
	 * @param string $consumerSecret The consumer secret to use.
	 */
	public function __construct()
	{
	    $this->setConsumerKey( Config::get('twitter::CONSUMER_KEY') );
	    $this->setConsumerSecret( Config::get('twitter::CONSUMER_SECRET') );
	}

}
