<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mfgid=$_POST["mfgid"];
    $mfgname=$_POST["mfgName"];
    $mfgmail=$_POST["mfgmail"];
    $mfgph=$_POST["mfgph"];
   
   
    try{
        require_once "dbh.php"; 
        $query="INSERT INTO manufacturer (ManufactureCode, Mfd_By, Email, PhNo) VALUES (?, ?, ?, ?)";
        $statement= $pdo->prepare($query);
        $statement->execute([$mfgid, $mfgname, $mfgmail, $mfgph]);
        $pdo=null;
        $statement=null;
        header('Location:./create/mfg.php');
        die();
    } catch(PDOException $e){
        echo "query failed: " . $e->getMessage();
    }
}
else{
    header('Location:../index.php');
}
?>
