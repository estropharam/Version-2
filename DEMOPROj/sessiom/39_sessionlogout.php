<?php
//session helps tp manage data between different pages.
session_start();
session_unset();
session_destroy();
echo "Your session has been Logged out";
?>