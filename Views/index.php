<?php

use App\SecureContent\CleanText;

include_once 'header.php';

$clean = new CleanText();

$id = $clean->CleanText($_SESSION["id"]);
$email = $clean->CleanText($_SESSION["email"]);
$firstname = $clean->CleanText($_SESSION["firstname"]);
$lastname = $clean->CleanText($_SESSION["lastname"]);
$asd = "asd.dfder<>";
$test = $clean->CleanText($asd);
echo "Felhasználó adatai: <br>";
echo "Azonosító: " . $id;
echo "<br>";
echo "E-mail: " . $email;
echo "<br>";
echo "Teljes név: " . $firstname . " " . $lastname;
echo "<br>";
echo $test;

include_once 'footer.php';


//validáció (input validáció class)


// direktbe nem adjuk be a user inputot

