<?php

include_once("DBConnection.php");

/**
 * Using singleton class
 * we created a db connection
 * without creating a class
 */
$dbh = DBConnection::get();

/**
 * PDO Create Operation
 * --------------------
 *
 * Rather then writing too
 * many insert statements using
 * php arrays you can create data
 * that needs to be inserted in the
 * database and using foreach you can
 * create records in the table one by one
 */
$categories = [
    'PHP' => 'php tutorials',
    'MySQL' => 'mysql tutorials',
    'Laravel' => 'laravel tutorials'
];

foreach ($categories as $title => $description) {

    // prepare pdo statement to prevent sql injections
    $sth = $dbh->prepare('INSERT INTO category(`title`, `description`) VALUES(:title, :description)');

    // bind string parameters
    $sth->bindParam(':title', $title);
    $sth->bindParam(':description', $description);

    $sth->execute();
}