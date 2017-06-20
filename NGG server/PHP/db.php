<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'e741238569';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
