<?php
require_once 'config/config.php';
require_once 'config/dbconnect.php';

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
switch ($action) {
	case 'register':
		include 'views/register.php';
		break;
	case 'add_teams':
		include 'models/add_teams.php';
		break;

	default:
		include 'views/register.php';
		break;
}
?>
