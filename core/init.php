<?php
$db = mysqli_connect('127.0.0.1','root','','elite');
if (mysqli_connect_errno()) {
	echo 'Database connection failed with the following errors: '. mysqli_connect_error();
	die();
}

require_once $_SERVER['DOCUMENT_ROOT'].'/elite/config.php';
require_once BASEURL.'helpers/helpers.php';