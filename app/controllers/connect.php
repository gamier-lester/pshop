<?php 

$host = 'db4free.net';
$username = 'gamier_lester';
$password = 'secretsecret';
$dbname = 'lgamier_testdb';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>