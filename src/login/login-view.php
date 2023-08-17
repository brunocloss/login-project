<?php 

declare(strict_types=1);

function errorsLogin(){
    if(isset($_SESSION['login_error'])){
        $errors = $_SESSION['login_error'];
        echo '<br>';

        foreach($errors as $error){
            echo '<p id="errors">'.$error.'</p>';
        }

        unset($_SESSION['login_error']);
    }
    else if(isset($_GET['login']) && $_GET['login'] === "logged"){
        echo '<br>';
        echo '<p>Login success</p>';
    }
}