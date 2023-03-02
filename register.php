<?php include_once 'header.php' ?>

<?php
require('db.php');

if (isset($_REQUEST['firstname']) && isset($_REQUEST['lastname'])) {
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($connect, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($connect, $lastname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($connect, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($connect, $password);
    $createDateTime = date("Y-m-d H:i:s");

    $insertQuery = "INSERT INTO Users (firstname, lastname, email, password, reg_date)
            VALUES ('$firstname', '$lastname', '$email', '" . md5($password) . "', '$createDateTime' )";
    $result = mysqli_query($connect, $insertQuery);

    if ($result) {
        echo "Sikeres regisztrálás!";
    } else {
        echo "Nem sikerült a regisztrálás.";
    }
} else {
    ?>
    <form class="form" action="register.php" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="firstname" placeholder="First name" required/>
        <input type="text" class="login-input" name="lastname" placeholder="Last name" required/>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
    <?php
}
?>
<?php include_once 'footer.php' ?>
