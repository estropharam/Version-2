<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stkid=$_POST["stkid"];
    $stkname=$_POST["stkName"];
    $state=$_POST["state"];
    $city=$_POST["city"];
    $dob=$_POST["dob"];
    $contact=$_POST["contact"];
    $hq=$_POST["hq"];
    $marriageAnniversary=$_POST["marriageAnniversary"];
    $add=$_POST["address"];
    $contactPerson=$_POST["contactPerson"];
    $email=$_POST["email"];
    $arename=$_POST["arename"];
   
    try{
        require_once "dbh.php"; 
        $query="INSERT INTO stockists (StkId,StkName,State,City	,DOB,Contact,HQ	,MarriageAnniversary,Address,ContactPerson,Email,PIN,GSTIN,PAN,DLNumber1,DLNumber2,AreaCode	) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement= $pdo->prepare($query);
        $statement->execute([$stkid,$stkname,$state,$city,$dob,$contact,$hq,$marriageAnniversary,$add,$contactPerson,$email ,$arename]);
        $pdo=null;
        $statement=null;
        header('Location:./create/stockist.php');
        die();
    } catch(PDOException $e){
        echo "query failed: " . $e->getMessage();
    }
}
else{
    header('Location:../index.php');
}
?>
