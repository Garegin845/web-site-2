<?php
$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'Garegin15_db';

$db = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName) or die('Connection is failed!!!');

$db->set_charset("utf8");
?>	