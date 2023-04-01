<?php

namespace App\Pancake;

class Orders
{

    public function storeOrder($id, $items, $city, $address, $postcode, $phone) :mixed
    {
        $connect = new DataBase();

        $id = stripslashes($id);
        $id = mysqli_real_escape_string($connect->getConnect(), $id);
        $city = stripslashes($city);
        $city = mysqli_real_escape_string($connect->getConnect(), $city);
        $address = stripslashes($address);
        $address = mysqli_real_escape_string($connect->getConnect(), $address);
        $postcode = stripslashes($postcode);
        $postcode = mysqli_real_escape_string($connect->getConnect(), $postcode);
        $phone = stripslashes($phone);
        $phone = mysqli_real_escape_string($connect->getConnect(), $phone);
        $createDateTime = date("Y-m-d H:i:s");

        $insert = "INSERT INTO Orders (userid, city, address, postcode, phone, reg_date)
            VALUES ('$id', '$city', '$address', '$postcode', '$phone', '$createDateTime')";
        $result = mysqli_query($connect->getConnect(), $insert);

        if ($result) {
            header("Location: pancakeFrontend.php");
        } else {
            echo "Nem sikerült";
        }

        $orderId = mysqli_insert_id($connect->getConnect());

        foreach ($items as $item) {
            $array = [];
            foreach ($item as $i) {
                $array[] = $i;
            }
            $array = implode(",", $array);

            $insertItem = "INSERT INTO Pancake (orderid, items)
            VALUES ('$orderId', '$array' )";

            $store = mysqli_query($connect->getConnect(), $insertItem);
        }
    }

}