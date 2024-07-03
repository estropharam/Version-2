<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["empId"];
    $name=$_POST["empName"];
    $desg=$_POST["empPosition"];
    $age=$_POST["empage"];
    $arcode=$_POST["emparcode"];
    $doj=$_POST["empdoj"];
    $add=$_POST["empadd"];
    $emcd=$_POST["empcode"];
   
try{
    require_once "dbh.php";
    $querry="INSERT INTO employees (EmployeeID,EmpCode,Name,Designation,Age,AreaCode,Address,DOJ)values(?,?,?,?,?,?,?,?); SELECT * FROM employees WHERE AreaType='Area';";

    $stmnt= $pdo->prepare($querry);
    $stmnt->execute([ $id,$name,$desg,$age,$arcode,$doj,$add, $emcd]);
    $pdo=null;
    $stmnt=null;
    header('Location:./create/emp.php');
    die();

 }catch(PDOException $e){
echo "querry failed". $e->getMessage();
 }

}
else{
    header('Location:../index.php');
}