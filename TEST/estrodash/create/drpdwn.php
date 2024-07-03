<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST["partyname"];
  $billno=$_POST["billno"];
  echo $name ;
  echo $billno;
 }
 else{
 echo  "error";
 }
?>