<?php
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
$sql="SELECT * FROM `ashwin61`.`comments` WHERE `Id` > 4;";
$result=mysqli_query($conn,$sql);

//find the number of rows 
$num=mysqli_num_rows($result);
echo '<h1>'.$num.'</h1>';

if($num>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    echo $row['Id']." ".$row['Name']." ".$row['Message'];
    echo "</br>";
  }
}
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "</br>";
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "</br>";
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "</br>";
// $row=mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "</br>";
?>