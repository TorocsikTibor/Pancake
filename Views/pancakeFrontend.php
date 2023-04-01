<?php

include_once 'header.php';

use \App\Pancake\SouceTypes;

$sizes = ["small", "medium", "big"];
$souceType = new SouceTypes();

?>
    <form action="pancakeMaker.php" method="post">
        <label for="type">Choose toltelek</label>
        <select class="form-select" name="type" id="type">
            <?php
            foreach ($souceType->types as $type) {
                ?>
                <option value="<?= $type; ?>"> <?= $type ?> </option>
                <?php
            }
            ?>
        </select>
        <label for="size">Choose méret</label>
        <select class="form-select" name="size" id="size">
            <?php
            foreach ($sizes as $size) {
                ?>
                <option value="<?= $size; ?>"> <?= $size ?> </option>
                <?php
            }
            ?>
        </select>

        <label class="form-label" for="typeNumber">Count</label>
        <input value="1" type="number" name="count" id="count" class="form-control"/>
        <input type="hidden" name="orders" value="" id="orders" />
        <input type="submit" class="btn btn-primary" value="Next">
    </form>

    <button onclick="getOrder()">More Pancake</button>

    <script>
        let orderFinal = [];

        function getOrder() {
            let order = [];
            order.push(document.getElementById('type').value);
            order.push(document.getElementById('size').value);
            order.push(document.getElementById('count').value);
            orderFinal.push(order);
            const orderJSON = JSON.stringify(orderFinal);
            document.getElementById('orders').value = orderJSON;
        }

    </script>

<?php
include_once 'footer.php';