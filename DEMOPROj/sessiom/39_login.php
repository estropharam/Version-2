<?php
session_start();
if(isset($_SESSION['username']))
{
    ECHO "Welcoome ".$_SESSION['username'];
    ECHO "</BR>";
    ECHO "Your favourite category ".$_SESSION['favcat'];
    ECHO "</BR>";
    echo "Your session has been saved";
}
else{
    echo "please login to continue";
}
?>