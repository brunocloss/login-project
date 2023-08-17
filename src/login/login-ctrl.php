<?php

declare(strict_types=1);

function emptyInput(string $username, string $pwd) {

    if (empty($username) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }

}

function usernameValidation(bool|array $username){

    if(!$username){
        return true;
    }
    else{
        return false;
    }

}

function passwordValidation(bool|array $pwd){

    if(!$pwd){
        return true;
    }
    else{
        return false;
    }

}