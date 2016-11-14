<?php #mysqli_connect.php

//This file contains the database access information
//This file also establishes a connection to MySQL,
//selects the database, and sets the encoding.


// Set the database access information as constants
DEFINE ('DB_USER', 'username');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'sitename');

//Make the connection
$mysqli = new MySQLI (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verify the connection
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    unset($mysqli);
}else {
    $mysqli->set_charset('utf8');
}

