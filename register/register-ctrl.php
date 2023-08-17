<?php 

function emptyInput($username, $pwd, $email) {

    if (empty($username) || empty($email) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }

}

function emailValidation($pdo, $email){

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || getEmail($pdo, $email)){
        return true;
    }
    else{
        return false;
    }

}

function usernameDuplicated($pdo, $username){

    if(getUsername($pdo, $username)){
        return true;
    }
    else{
        false;
    }

}

function pwdValidation ($pwd, $pwdConfirm){
    
    if($pwd !== $pwdConfirm){
        return true;
    }
    else{
        return false;
    }

}

function registerUser($pdo, $username, $email, $pwd){

    createUser($pdo, $username, $email, $pwd);

}