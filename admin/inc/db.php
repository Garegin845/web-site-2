<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'Garegin15_db';

$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$db->set_charset("utf8");
?>