<?php

session_start();
include_once(dirname(__FILE__) . '/global_ini.php');

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
	// last request was more than 15 minutes ago
	//session_unset();     // unset $_SESSION variable for the run-time 
	session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time();

if (isset($_GET['lang'])) {
	$_SESSION['lang'] = filter_input(INPUT_GET, "lang");
} else if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && !isset($_SESSION['lang'])) {
	$browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if (file_exists("lang/" . $browserLang . ".json")) {
		$_SESSION['lang'] = $browserLang;
	} else {
		$_SERVER['lang'] = "en";
	}
}

/*if (!isset($_GET['section']) OR filter_input(INPUT_GET, "section", FILTER_SANITIZE_STRING) === 'login') {
	include_once('controller/login.php');
} else if (!isset($_GET['section']) OR filter_input(INPUT_GET, "section", FILTER_SANITIZE_STRING) === 'configuration') {
	include_once('controller/config.php');
} else if (!isset($_GET['section']) OR filter_input(INPUT_GET, "section", FILTER_SANITIZE_STRING) === 'diagnostics') {
	include_once('controller/diagnostics.php');
} else */if (!isset($_GET['section']) OR filter_input(INPUT_GET, "section", FILTER_SANITIZE_STRING) === 'calibration') {
	include_once('controller/memento.php');
}