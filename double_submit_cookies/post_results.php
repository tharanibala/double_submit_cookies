<?php

require_once 'csrf_token.php';


$csrf_value = $_POST["csrf_token"];


if(isset($_POST['name']))
{
	if(csrf_token::check_csrf_token($csrf_value,$_COOKIE['csrf_cookie']))
	{
		
		echo "<font color='green' size='6'>".$_POST['name']."<p> Thank You for posting</p> </font>";	
		
	}
	else
	{
		echo "<font color='red' size='12'> Cross-Site Request Forgery Attack is ELIMINATED using Double Submit Cookies </font>";
	}
}

?>