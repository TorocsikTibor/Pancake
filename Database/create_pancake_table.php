<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pancake";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS Pancake (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    orderid INT(6) UNSIGNED NOT NULL,
    items VARCHAR(30) NOT NULL,
    CONSTRAINT Orders_fk_id FOREIGN KEY (orderid) REFERENCES Orders(id)
)";

if($connect->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $connect->connect_error;
}

$connect->close();
