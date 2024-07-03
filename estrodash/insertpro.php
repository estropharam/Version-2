    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $proid=$_POST["proid"];
        $proname=$_POST["proname"];
        $mfgid=$_POST["mfgid"];
        $probtch=$_POST["btchid"];
        $hsn=$_POST["hsn"];
        $ptr=$_POST["ptr"];
        $pts=$_POST["pts"];
        $pkg=$_POST["pkg"];
        $exp=$_POST["exp"];
        $rate=$_POST["rate"];
        $promrp=$_POST["mrp"];
    
    try{
        require_once "dbh.php";
        $querry="INSERT INTO products (P_Id,ProductName,ManufactureCode,BatchId,HSN,PTR,PTS,PKG,EXP,Rate,MRP)values(?,?,?,?,?,?,?,?,?,?,?);";
        $stmnt= $pdo->prepare($querry);
        $stmnt->execute([ $proid,$proname,$mfgid,$probtch, $hsn, $ptr, $pts, $pkg, $exp, $rate, $promrp]);
        $pdo=null;
        $stmnt=null;
        header('Location:./create/product.php');
        die();

    }catch(PDOException $e){
    echo "querry failed". $e->getMessage();
    }

    }
    else{
        header('Location:../index.php');
    }