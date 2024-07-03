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
$name="Tarzan";
$place="Mathura";
$date=2000-06-19;
$sql="INSERT INTO `student` (`NAME`, `ADDRESS`, `DOB`) VALUES ('Shivam', 'Lucknow', '2000-06-19'),('Varun', 'Lucknow', '2000-06-19'),($name,$place,$date);";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo("database connected");
}
else
{
    echo "Insertion of value failed </br>----->".mysqli_error($conn);
}
?>