<?php

$user = 'root';
$pass = '';
$db = 'wmsiwt';

$connection = new mysqli ('localhost', $user, $pass, $db) or die("Unable to connect.");

echo "Connected to the database succesfully.\n";

$sql = "CREATE TABLE  Feedback(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50),
email VARCHAR(50) NOT NULL,
reason VARCHAR(30) NOT NULL,
comment VARCHAR(1000) NOT NULL)";

if ($connection->query($sql) === TRUE) {
    echo "Table Feedback has been succesfully created ";
} else {
    echo "Error creating table: " . $connection->error;
}
?>