<?php
	session_start();
	
	function myAutoloader($class) {
		require_once('../app/class/' . ucfirst($class) . '.class.php');
	}
	spl_autoload_register('myAutoloader');
	$_PAGE = new Page();

	require_once('functions.php');
