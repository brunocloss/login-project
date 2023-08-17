<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try{

        require_once "../database/db.php";
        require_once "login-model.php";
        require_once "login-ctrl.php";

        $errors = [];

        if(emptyInput($username, $pwd)) {
            $errors['empty_error'] = "Fill all fields";
        }

        $resUsername = getUsername($pdo, $username);
        $resPwd = getPwd($pdo, $pwd);
        
        if(usernameValidation($resUsername)){
            $errors['username_error'] = "Incorrent username";
        }

        if(!usernameValidation($resUsername) && passwordValidation($resPwd)){
            $errors['password_error'] = "Incorrent password";
        } 

        require_once "../session/session-start.php";

        if($errors){
            $_SESSION['login_error'] = $errors;

            header("Location: ../index.php");
            die();
        }

        $_SESSION['user_id'] = $resUsername['id'];    
        $_SESSION['user_username'] = htmlspecialchars($resUsername['username']);  
        
        header("Location: ../index.php?login=logged");
        $pdo = NULL;
        $sql = NULL;
        die();

    }
    catch(Exception $e){ 
        echo "Failed (login.php): " . $e->getMessage();
    }

}
else{

    header("Location: ../index.php");

}