<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("DATABASE NOT CONNECTED".mysqli_connect());
}
echo "<h1>"."DATABASE CONNECTED!"."</h1";
$sql="CREATE DATABASE Ashwin61";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo "the db created sucessfuly";
}
else
{
    echo "DB not connedted----->".mysqli_error($conn);
}
?>

