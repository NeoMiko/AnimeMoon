<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'animemoon';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
