<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pancake";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS Orders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userid INT(6) UNSIGNED NOT NULL,
    city VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    postcode VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT Users_fk_id FOREIGN KEY (userid) REFERENCES Users(id)
)";

if($connect->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $connect->connect_error;
}

$connect->close();