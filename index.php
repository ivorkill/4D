<?php
require_once 'config/config.php';
require_once 'config/dbconnect.php';

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
switch ($action) {
	case 'register_teams':
		require 'models/add_teams.php';
		include 'views/register_teams.php';
		break;
	case 'select_teams':
		require 'models/select_teams.php';
		break;
	case 'register_schools':
		require 'models/add_schools.php';
		include 'views/register_schools.php';
		break;
	case 'select_schools':
		require 'models/select_schools.php';
		break;
	case 'register_classes':
		require 'models/add_classes.php';
		include 'views/register_classes.php';
		break;
	case 'select_classes':
		require 'models/select_classes.php';
		break;
	default:
		include 'views/home.php';
		break;
}
?>
