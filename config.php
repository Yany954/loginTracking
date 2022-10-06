<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("90142188854-pvcsfa05n9268c22402i7tjf84b3968r.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("Login Tracking");
	$gClient->setRedirectUri("http://localhost/LoginTracking/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
