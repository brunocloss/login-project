<?php
    require_once "session/session-start.php";
    require_once "register/register-view.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">

</head>

<body>

<div class="container">

<h2 id="title">REGISTER</h2>
        <form action="register/register.php" method="post">
            <input type="text" name="username" class="input-el" placeholder="Name" maxlength="20"><br>
            <input type="text" name="email" class="input-el" placeholder="E-mail" maxlength="25"><br>
            <input type="password" name="pwd" class="input-el" placeholder="Password"><br>
            <input type="password" name="pwdConfirm" class="input-el" placeholder="Repeat password"><br>
            <input type="submit" name="register" class="input-el submit-btn" value="Register"><br>
        </form>
        <a href="index.php" id="signup">Back</a>
        <?php
            errorsValidation();
        ?>
    </div>


</body>

</html>