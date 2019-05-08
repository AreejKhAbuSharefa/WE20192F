<?php
$userName = $_POST['userName'];
$password = $_POST['password'];

include_once('DbConnection.php');
$dbConnection = DbConnection::getDbConnection();
if($dbConnection->verifyUser($userName,$password))
	header("Location: admin.php");
else
	header("Location: index.php");


?>