<?php

session_start();

require_once 'Pancake\Pancake.php';
require_once 'Pancake\Cocoa.php';
require_once 'Pancake\Blueberry.php';
require_once 'Pancake\SouceTypes.php';
require_once 'Pancake\Orders.php';

$sizes = ["small", "medium", "big"];

$souceType = new SouceTypes();
//foreach ($sizes as $size) {
//    echo $size . '<br>';
//}
//echo '<br>';
//foreach ($types as $type) {
//    echo $type . '<br>';
//}
echo '<br>';
//Pancake::getTypes()[0];
?>

<!DOCTYPE html>
<html lang="html">
<head>
    <title>Pancake</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="type">Choose toltelek</label>
    <select name="type" id="type">
        <?php
        foreach ($souceType->types as $type) {
            ?>
            <option value="<?= $type; ?>"> <?= $type ?> </option>
            <?php
        }
        ?>
    </select>
    <label for="size">Choose méret</label>
    <select name="size" id="size">
        <?php
        foreach ($sizes as $size) {
            ?>
            <option value="<?= $size; ?>"> <?= $size ?> </option>
            <?php
        }
        ?>
    </select>
    <input type="submit">
</form>
</body>
</html>

<?php

//validáció (input validáció class)


// direktbe nem adjuk be a user inputot

$concreateType = $souceType->create($_POST['type']);
$pancake = new Pancake($concreateType, $_POST['size']);
$order = new Orders();
echo '<br>';
echo $pancake->getPasta();
echo '<br>';
echo $pancake->getSouce()->getSouce();
echo '<br>';
echo $pancake->getSize();
echo '<br>';
//$orders[] = $pancake->getSouce()->getSouce();

//$_SESSION['orders'] = [];
$_SESSION['orders'][] = $pancake->getSouce()->getSouce();
$order->storeOrder($_SESSION['orders']);
print_r($order->getOrders());
//$_SESSION['orders'] = $orders;
//print_r($_SESSION['orders']);
//$_SESSION['orders'] = $orders;


//echo $pancake->souce->make($_POST['type']);
