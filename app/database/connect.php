<?php

$host = 'localhost';
$user = 'admin';
$pass = 'admin';
$db_name = 'blogg';

$conn = new MySQLi($host, $user, $pass, $db_name);

// if ($conn->connect_error) {
//     die('Database connection error:' .$conn->connect_error);
// } else {
//     echo "Db connection successful";
// }