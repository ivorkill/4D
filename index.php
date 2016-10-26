<?php
session_start();
ob_start();
//Requiring the database connection
require_once 'config/config.php';
require_once 'config/dbconnect.php';

//Including the QR-generator
include 'phpqrcode/qrlib.php';

//Including the views
include 'views/head.html';

//Declaring the switch variable
$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$name = (empty($_GET['name'])) ? '' : $_GET['name'];
switch ($action) {
	case 'register_teams':
		include 'views/register_form.php';
		break;
	case 'add_teams':
		include 'models/register_teams.php';
		break;
	case 'qr_gen';
		require 'models/team_qr.php';
		include 'views/generate_qr.php';
		break;
	case 'login_teams':
		include 'views/login_form.php';
		break;
	case 'login':
		include 'models/login_teams.php';
		break;
	case 'account':
		require 'models/select_teams.php';
		include 'views/account.php';
		break;
	case 'logout':
		include 'views/logout.php';
		break;
	case 'description_form':
		include 'views/description_form.php';
		break;
	case 'change_description':
		include 'models/change_description.php';
		break;
	default:
		include 'views/home.php';
		break;
}
?>
