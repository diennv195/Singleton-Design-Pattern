<?php

include_once("DBConnection.php");

/**
 * Using singleton class
 * we created a db connection
 * without creating a class
 */
$dbh = DBConnection::get();

/**
 * PDO: Update Operation
 * ---------------------
 *
 * You can modify existing database
 * record using update operation
 */
 
$existing_title  = 'PHP';
$new_description = 'Updated PHP tutorial description';

// let's update existing record using
// let's update new description for php
$sth = $dbh->prepare('UPDATE category SET `description` = :description WHERE `title` = :title');

$sth->bindParam(':title', $existing_title);
$sth->bindParam(':description', $new_description);

$sth->execute();