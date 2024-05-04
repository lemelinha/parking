<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbname = 'db_parking';

$conn = new \PDO("mysql:host=$host;dbname=$dbname;", $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
