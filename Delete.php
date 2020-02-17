<?php

include_once("DBConnection.php");

/**
 * Using singleton class
 * we created a db connection
 * without creating a class
 */
$dbh = DBConnection::get();

/**
 * PDO Delete Operation
 * --------------------
 *
 * You can delete all the records
 * from category table using query function
 * provided by pdo library
 */
$dbh->query('DELETE FROM category');
​