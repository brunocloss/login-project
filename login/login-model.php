<?php

declare(strict_types=1);

function getUsername(object $pdo, string $username){
    $sql = $pdo->prepare("SELECT * FROM register WHERE username = :u;");
    $sql->bindValue(':u', $username);
    $sql->execute();

    $res = $sql->fetch(PDO::FETCH_ASSOC);
    return $res;
}

function getPwd(object $pdo, string $pwd){
    $sql = $pdo->prepare("SELECT * FROM register WHERE pwd = :p;");
    $sql->bindValue(':p', $pwd);
    $sql->execute();

    $res = $sql->fetch(PDO::FETCH_ASSOC);
    return $res;
}