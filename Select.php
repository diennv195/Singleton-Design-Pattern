<?php

include_once("DBConnection.php");

/**
 * Using singleton class
 * we created a db connection
 * without creating a class
 */
$dbh = DBConnection::get();

/**
 * PDO: Read Operation
 * ---------------------
 *
 * Using select query you can
 * fetch all the records from the
 * database and show them on console or web browser
 */
$records = $dbh->query('SELECT * FROM category');

// loop through all the records
// and shown them in console or web browser
foreach ($records as $record) {
    echo "{$record['title']}: {$record['description']}" .PHP_EOL;
}