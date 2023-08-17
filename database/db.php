<?php

$host = "";
$dbname = "projeto";
$userhost = "";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=".$dbname, $userhost, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Db connected";
}
catch(PDOException $e){
    echo "Failed (db.php): " . $e->getMessage();
}

