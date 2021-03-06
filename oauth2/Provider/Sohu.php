<?php namespace src\oauth2\Provider; 
use src\oauth2\Provider;
use src\oauth2\Token\Access;
/**
 *  
 * @author Sun < sunkang@wstaichi.com >
 * @Coprighty  http://wstaichi.com
 */
 

class Sohu extends Provider
{
	public function url_authorize()
	{
		return 'https://api.t.sohu.com/oauth2/authorize';
	}

	public function url_access_token()
	{
		return 'https://api.t.sohu.com/oauth2/access_token';
	}
	public function url_access()
	{
		return 'https://api.t.sohu.com/oauth2/user/';
	}
	public function get_user_info(Access $token)
	{
		$t = urlencode($token->access_token);
		 
		
		$context = stream_context_create(array(
		  'http'=>array(
		    'method'=>"GET",
		    'header'=>"Accept-language: en\r\n" .
		              "Authorization: Bearer ".$t."\r\n"
		  )
		)); 
		$user = file_get_contents($this->url_access(), false, $context);
		
		$user = json_decode($user);  
		// Create a response from the request
		return array(
			'id' => $user->id, 
			'name' => $user->name, 
		);
	}
	

	 
}