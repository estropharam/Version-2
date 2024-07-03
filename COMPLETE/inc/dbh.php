<?php
$dsn="mysql:host=localhost;dbname=estrobase";
$dbusername="root";
$dbpasswrd="";
 
try{
    $pdo= New PDO($dsn,$dbusername,$dbpasswrd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Connection Failed".$e->getMessage();

}