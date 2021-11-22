<?php

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'film_database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli === false) {
    echo "can't connect to database";
}