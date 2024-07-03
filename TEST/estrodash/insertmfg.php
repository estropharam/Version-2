<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mfgid=$_POST["mfgid"];
    $mfgname=$_POST["mfgName"];
    $mfgmail=$_POST["mfgmail"];
    $mfgph=$_POST["mfgph"];
    $mfgadd=$_POST["mfgadd"];
    $lino=$_POST["lino"];
   
   
    try{
        require_once "dbh.php"; 
        $query="INSERT INTO manufacturer (ManufactureCode, Manufacturer, Email, PhNo,Address,LicenseNo) VALUES (?, ?, ?, ?, ?, ?)";
        $statement= $pdo->prepare($query);
        $statement->execute([$mfgid, $mfgname, $mfgmail, $mfgph,$mfgadd,$lino]);
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
