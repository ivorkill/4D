<?php
require_once 'config/config.php';
require_once 'config/dbconnect.php';
require_once 'Mobile_Detect.php';


$detect = new Mobile_Detect;

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$page = (empty($_POST['page'])) ? '' : $_POST['page'];

if ( $detect->isMobile() ) {
	include 'Mobile-views/head.html';
	switch ($page) {
		case 'Scannen':
			include 'Mobile-views/scan.html';
			break;

		case 'Beoordelen':
			include 'Mobile-views/rate.php';
			break;

		case 'Stem':
			include 'Mobile-views/vote.php';
			break;

		default:
			include 'Mobile-views/index.html';
			break;
	}
}
else {
	include 'views/head.html';
	switch ($action) {
		case 'register_teams':
			include 'views/register_teams.php';
			break;
		case 'add _teams':
			include 'models/add_teams.php';
			break;
		case 'select_teams':
			require 'models/select_teams.php';
			break;
		case 'register_schools':
			include 'views/register_schools.php';
			break;
		case 'add_schools':
			include 'models/add_schools.php';
			break;
		case 'select_schools':
			require 'models/select_schools.php';
			break;
		case 'register_classes':
			include 'views/register_classes.php';
			break;
		case 'add_classes':
			include 'models/add_classes.php';
			break;
		case 'select_classes':
			require 'models/select_classes.php';
			break;
		case 'qr_gen';
			require 'models/select_teams.php';
			include 'views/generate_qr.php';
			break;
		default:
			include 'views/home.html';
			break;
	}
}

?>
