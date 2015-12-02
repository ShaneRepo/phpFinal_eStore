<?php
// Set the database access information as constants:
DEFINE ('DB_USER', 'localhost');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'phpfinal');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// If no connection could be made, trigger an error:
if (!$dbc) {
    trigger_error ('Could not connect to MySQL: ' . mysqli_connect_error() );
} else { // Otherwise, set the encoding:
    mysqli_set_charset($dbc, 'utf8');
}