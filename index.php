<?php
session_start();
ob_start();
//Requiring the database connection
require_once 'config/config.php';
require_once 'config/dbconnect.php';
require_once 'Mobile_Detect.php';

$detect = new Mobile_Detect;
//Including the QR-generator
include 'phpqrcode/qrlib.php';

//Including the views
include 'views/head.html';

//Declaring the switch variable
$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$page = (empty($_POST['page'])) ? '' : $_POST['page'];
$name = (empty($_GET['name'])) ? '' : $_GET['name'];

if ( $detect->isMobile() ) {
	if (!isset($_COOKIE['UserID'])) {
		$code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), -10);
		setcookie("UserID",$code,time()+(86400 * 30));
	}
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
	include 'views/header.html';
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
		case 'img_upload_form':
			include 'views/upload_image_form.php';
			break;
		case 'img_upload':
			include 'models/upload_img.php';
			break;
		case 'show_qr':
			require 'models/select_teams.php';
			include 'views/show_qr.php';
			break;
		default:
			include 'views/home.php';
			break;
	}
}
?>
