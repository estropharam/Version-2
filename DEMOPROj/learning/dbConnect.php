<?php
Echo "Welcome to the file where we connect database</br>";
$servername="localhost";
$username="root";
$password="";
$database="Ashwin61";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    echo("Database not connected </br>");
}
else
{
   echo("Database Connected </br>");
}
?>