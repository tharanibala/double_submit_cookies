<?php

class csrf_token
{

	public static function check_csrf_token($csrf_token,$csrf_cookie)
	{
	
		if($csrf_cookie==$csrf_token)
		{
			return true;
		}

	}
	
}

?>