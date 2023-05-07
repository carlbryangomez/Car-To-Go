<?php
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("695234518383-g12ii6ue7llf4c6ttg1mh2hn8s85rqnk.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("Car-to-go");
	$gClient->setRedirectUri("http://localhost/Car_to_go/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
