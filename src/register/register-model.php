<?php 

function getUsername($pdo, $username){
    $sql = $pdo->prepare("SELECT username FROM register WHERE username = :u;");
    $sql->bindValue(':u', $username);
    $sql->execute();

    $res = $sql->fetch(PDO::FETCH_ASSOC);
    return $res;
}

function getEmail($pdo, $email){
    $sql = $pdo->prepare("SELECT username FROM register WHERE email = :e;");
    $sql->bindValue(':e', $email);
    $sql->execute();

    $res = $sql->fetch(PDO::FETCH_ASSOC);
    return $res;
}

function createUser($pdo, $username, $email, $pwd){

    $sql = $pdo->prepare("INSERT INTO register (username, pwd, email) VALUES (:u, :p, :e)");

    $sql->bindParam(':u', $username);
    $sql->bindParam(':p', $pwd);
    $sql->bindParam(':e', $email);
    $sql->execute();

}