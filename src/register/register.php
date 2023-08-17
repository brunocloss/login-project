<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    $pwdConfirm = $_POST['pwdConfirm'];

    try {

        require_once "../database/db.php";
        require_once "register-model.php";
        require_once "register-ctrl.php";

        $errors = [];

        if(emptyInput($username, $pwd, $email)) {
            $errors['empty_error'] = "Fill all fields";
        }
        if(emailValidation($pdo, $email)) {
            $errors['email_error'] = "Invalid email or already taken";
        }
        if(usernameDuplicated($pdo, $username)) {
            $errors['username_error'] = "This username has already been taken";
        }
        if(pwdValidation ($pwd, $pwdConfirm)){
            $errors['password_error'] = "The passwords are different";
        }

        require_once "../session/session-start.php";

        if ($errors) {
            $_SESSION['register_error'] = $errors;
            header('Location: ../register-front.php');
            die();
        }

        registerUser($pdo, $username, $email, $pwd);

        header("Location: ../index.php?signup=success");

        $pdo = NULL;
        $sql = NULL;

    } 
    catch (PDOException $e) {
        echo "Failed (register.php): " . $e->getMessage();
    }

}
 else {
    header("Location: ../index.php");
    die();
}

