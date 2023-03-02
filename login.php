<?php

include_once 'header.php';
require('db.php');

session_start();
// When form submitted, check and create user session.
if (isset($_REQUEST['email'])) {
    $email = stripslashes($_REQUEST['email']);    // removes backslashes
    $email = mysqli_real_escape_string($connect, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($connect, $password);

    // Check user is exist in the database
    $query    = "SELECT * FROM Users WHERE email ='$email'
                     AND password ='" . md5($password) . "'";
    $result = mysqli_query($connect, $query) or die(mysqli_connect_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $data["email"];
        $_SESSION['firstname'] = $data["firstname"];
        $_SESSION['lastname'] = $data["lastname"];
        // Redirect to user dashboard page
        header("Location: index.php");
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
    }
} else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="email" placeholder="E-mail" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
    </form>
    <?php
}


?>
<?php include_once 'footer.php' ?>