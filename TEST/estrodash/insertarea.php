<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $arname=$_POST["arname"];
    $type=$_POST["artype"];
    $pool=$_POST["arpool"];
try{
    require_once "dbh.php";
    $querry="INSERT INTO area (AreaName,AreaType,Pool)values(?,?,?);";
    $stmnt= $pdo->prepare($querry);
    $stmnt->execute([ $arname,$type,$pool]);
    $pdo=null;
    $stmnt=null;
    header('Location:./create/area.php');
    die();

 }catch(PDOException $e){
echo "querry failed". $e->getMessage();
 }

}
else{
    header('Location:../index.php');
}