<?php

class Twitter
{
	public function checkUsername($username)
	{
	    $twitter='http://api.twitter.com/1/users/show/'.$username.'.xml';
 
		$init = curl_init();
		curl_setopt ($init, CURLOPT_URL, $twitter_url);
		curl_setopt ($init, CURLOPT_CONNECTTIMEOUT, 20);
		curl_setopt($init, CURLOPT_NOBODY, 1);
		curl_setopt($init, CURLOPT_HEADER, 1);
		curl_setopt($init, CURLOPT_RETURNTRANSFER, true);
		 
		curl_exec($init);
		$header = curl_getinfo($init, CURLINFO_HTTP_CODE);
		curl_close($init);
		 
		if('404' == $result_header )
		{
		return true;
		}
		else
		{
		return false;
		}
	}
}

?>