<?php

use App\Db\DataBase;
use App\Pancake\Orders;
use App\Pancake\SouceTypes;
use App\SecureContent\CleanText;

include_once 'header.php';

$sizes = ["small", "medium", "big"];
$souceType = new SouceTypes();
$connect = new DataBase();
$clean = new CleanText();
// validate post

//$concreateType = $souceType->create($_POST['type']);
//$pancake = new Pancake($concreateType, $_POST['size']);
//$order = new Orders();
//echo '<br>';
//echo $pancake->getPasta();
//echo '<br>';
//echo $pancake->getSouce()->getSouce();
//echo '<br>';
//echo $pancake->getSize();
//echo '<br>';
//echo $_POST['count'];
//echo '<br>';

if (isset($_POST['orders'])) {
    $orders = json_decode($_POST['orders']);
    try {
        $souceType->create($orders[0][0]);
    } catch (Exception $e) {
        echo "Error in souce types! ";
        header("Location: pancakeFrontend.php");
    }

    $_SESSION['orders'] = $orders;
}

if (isset($_POST['submit'])) {
    $keys = explode(',', $_POST['orderKey']);
    foreach ($keys as $key) {
        if (is_int((int)$key)) {
            unset($_SESSION['orders'][$key]);
        }
    }
}

echo '<form method="post" action="#">';

foreach ($_SESSION['orders'] as $keyOrder => $order) {

    echo $keyOrder . ". elem" . "<br>";
    echo '<input type="checkbox" onclick="deleteChecked(this)" value="' . $keyOrder . '">';

    foreach ($order as $item) {
        echo $item . "<br>";
    }
    echo "<br>";
}
echo "<input type='hidden' name='orderKey' id='orderKey' value='' />";
echo "<input type='submit' name='submit' value='Delete' />";
echo '</form>';

if (isset($_REQUEST['city'])) {
    $store = new Orders();
    $store->storeOrder($clean->CleanText($_SESSION['id']), $clean->CleanText($_SESSION['orders']),
        $clean->CleanText($_REQUEST['city']), $clean->CleanText($_REQUEST['address']),
        $clean->CleanText($_REQUEST['postcode']), $clean->CleanText($_REQUEST['phone']));
}

echo '<form method="post" action="#">';
echo "<label class='form-label' for='text'>City</label>";
echo "<input type='text' name='city' />";
echo "<label class='form-label' for='address'>Address</label>";
echo "<input type='text' name='address' />";
echo "<label class='form-label' for='postcode'>Postcode</label>";
echo "<input type='text' name='postcode' />";
echo "<label class='form-label' for='phone'>Phone</label>";
echo "<input type='text' name='phone' />";
echo "<input type='submit' name='sub' value='Order' />";
echo '</form>';

include_once 'footer.php';
?>

<script>
    function deleteChecked(element) {
        document.getElementById("orderKey").value += element.value + ',';
        // console.log(document.getElementById("orderKey").value);
    }
</script>
