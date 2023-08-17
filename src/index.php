<?php

require_once "session/session-start.php";
require_once "register/register-view.php";
require_once "login/login-view.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/styles.css">

</head>

<body>

    <?php
    if (!isset($_SESSION['user_id'])) {
    ?>

        <div class="container">
            <h2 id="title">LOGIN</h2>
            <form action="login/login.php" method="post">
                <input type="text" name="username" class="input-el" placeholder="Username"><br>
                <input type="password" name="pwd" class="input-el" placeholder="Password"><br>

                <div class="container-anchors">
                    <a href="register-front.php" id="signup">Register</a>
                </div>

                <input type="submit" name="submit-btn" value="Login" class="input-el submit-btn"><br>

            </form>
            <?php
            errorsLogin();
            ?>

        </div>

    <?php
    } else {
    ?>
        <div class="container">

            <h2 id="title">WELCOME <span id="user"><?= $_SESSION['user_username'] ?></span></h2>

            <form action="logout.php" method="post">
                <input type="submit" name="submit-btn" value="Logout" class="input-el submit-btn"><br>

            </form>
        </div>

    <?php
    }



    ?>



</body>

</html>