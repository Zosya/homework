<?php 
if ( (empty($_COOKIE['id'])) && (empty($_COOKIE['em']))) 
	include 'login-form.php';
else include 'site.php';

?>
