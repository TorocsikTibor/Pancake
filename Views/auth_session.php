<?php
    session_start();
    if(!isset($_SESSION["email"]) && !isset($_SESSION["firstname"]) && !isset($_SESSION["lastname"]) ) {
//        header("Location: login.php");
//        exit();
    }