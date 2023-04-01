<?php

namespace App\Db;

class DataBase {

    private $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect("localhost", "root", "", "Pancake");
    }

    public function getConnect() {
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            return $this->connect;
        }
    }
}