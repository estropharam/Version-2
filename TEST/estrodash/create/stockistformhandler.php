<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $pin=$_POST["pin"];
    $gstin=$_POST["gstin"];
    $pan=$_POST["pan"];
    $dlNumber1=$_POST["dlNumber1"];
    $dlNumber2=$_POST["dlNumber2"];
    
    $arcode=$_POST["emparcode"];


   
    try {
        require_once "../dbh.php";
        $conditionValue = $arcode;
        $sql = "SELECT AreaCode FROM area WHERE AreaName = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$conditionValue]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $arecode = $row["AreaCode"];
        }
        // echo $arecode;
        try {
            $sqlS = "INSERT INTO stockists (StkId,StkName,State,City,DOB,Contact,HQ	,MarriageAnniversary,Address,ContactPerson,Email,PIN,GSTIN,PAN,DLNumber1,DLNumber2,AreaCode	) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmtS = $pdo->prepare($sqlS);
            $stmtS->execute([$stkid, $stkname , $state,$city, $dob ,$contact ,$hq , $marriageAnniversary ,$add , $contactPerson,  $email,$pin ,$gstin,$pan,  $dlNumber1,$dlNumber2,$arecode]); // bind values
            echo "Added Successfully";
        } catch (PDOException $e) {
            echo "NOT ADDED" . $e->getMessage();
        }
    } catch (PDOException $e) {
        echo "query failed" . $e->getMessage();
    }
} else {
    header('Location:../index.php');
}
?>