<?php


//session_start();

//require_once 'Pancake\Pancake.php';
//require_once 'Pancake\Cocoa.php';
//require_once 'Pancake\Blueberry.php';
//require_once 'Pancake\SouceTypes.php';
//require_once 'Pancake\Orders.php';
//foreach ($sizes as $size) {
//    echo $size . '<br>';
//}
//echo '<br>';
//foreach ($types as $type) {
//    echo $type . '<br>';
//}
//Pancake::getTypes()[0];
?>
<?php
    include_once 'header.php';


echo "Felhasználó adatai: <br>";
echo "E-mail: " . $_SESSION["email"];
echo "<br>";
echo "Teljes név: " . $_SESSION["firstname"] . " " . $_SESSION["lastname"];
echo "<br>";




?>

<?php include_once 'footer.php' ?>
<?php

//validáció (input validáció class)


// direktbe nem adjuk be a user inputot

//$orders[] = $pancake->getSouce()->getSouce();

//$_SESSION['orders'] = [];
//$_SESSION['orders'][] = $pancake->getSouce()->getSouce();
//$order->storeOrder($_SESSION['orders']);
//print_r($order->getOrders());
//$_SESSION['orders'] = $orders;
//print_r($_SESSION['orders']);
//$_SESSION['orders'] = $orders;


//echo $pancake->souce->make($_POST['type']);
