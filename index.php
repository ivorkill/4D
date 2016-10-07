<?php
require_once 'config/config.php';
require_once 'config/dbconnect.php';

include 'views/head.html';

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
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
?>
