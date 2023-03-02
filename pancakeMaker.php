<?php


$sizes = ["small", "medium", "big"];
$souceType = new SouceTypes();
?>


<?php include_once 'header.php' ?>

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
    <input type="submit" class="btn btn-primary">
</form>


<?php
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
?>

<?php include_once 'footer.php' ?>
