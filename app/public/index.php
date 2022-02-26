<?php

$dbname = "test";
$dbhost = "mysql";
$dbuser = "test";
$dbpass = "test";

$pdo = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpass);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo "MySQL version: " . $row['Value'];
