<?php
$mysqli = new mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

echo "Connected to MySQL successfully!";
?>
