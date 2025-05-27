<?php
$user = 'u68802';
$pass = '2146665';
$db = new PDO(
	'mysql:host=localhost;dbname=u68802',
	$user,
	$pass,
	[PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
?>
