<?php 

function errorsValidation(){
    if(isset($_SESSION['register_error'])){
        $errors = $_SESSION['register_error'];
        echo '<br>';

        foreach($errors as $error){
            echo '<p id="errors">'.$error.'</p>';
        }

        unset($_SESSION['register_error']);
    }
    else if(isset($_GET['signup']) && $_GET['signup'] === "success"){
        echo '<br>';
        echo '<p>Sign up success</p>';
    }
}