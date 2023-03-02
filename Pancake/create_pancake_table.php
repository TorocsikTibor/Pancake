<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pancake";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS Pancake";
if($connect->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $connect->connect_error;
}

$sql = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($connect->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $connect->connect_error;
}

$connect->close();