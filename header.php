<?php
//session_start();

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/Pancake/' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

include_once "auth_session.php";

?>

<!DOCTYPE html>
<html lang="html">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <title>Pancake</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="pancakeMaker.php">Make pancake</a>
                    <a class="nav-link" href="Pancake/create_pancake_table.php">Database</a>
                    <a class="nav-link" href="register.php">Register</a>

                    <?php
                    if (!$_SESSION["email"]) {

                        ?>
                        <a class="nav-link" href="login.php">Login</a>"

                        <?php
                    } else {

                        ?>
                        <a class="nav-link" href="logout.php">Logout</a>

                        <?php
                    }
                    ?>

                    <a class="nav-link disabled" href="#">
                        <?php
//                        echo "Teljes név: " . $_SESSION["firstname"] . " " . $_SESSION["lastname"];
                        ?></a>
                </div>
            </div>
        </div>
    </nav>
</header>
<body>


<div class="container">

