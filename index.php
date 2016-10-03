<?php
require_once 'config/config.php';
require_once 'config/dbconnect.php';

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
switch ($action) {
	case 'register_teams':
		include 'views/register_teams.php';
		break;
	case 'add_teams':
		include 'models/add_teams.php';
		break;
	case 'register_schools':
		include 'views/register_schools.php';
		break;
	case 'add_schools':
		include 'models/add_schools.php';
		break;
	case 'register_classes':
		include 'views/register_classes.php';
		break;
	case 'add_classes':
		include 'models/add_classes.php';
		break;
	default:
		include 'views/register_teams.php';
		break;
}
?>
