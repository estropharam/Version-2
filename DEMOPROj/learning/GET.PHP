
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email']'';
    $pass = $_POST['pass']'';
    echo "Email: $email<br>";
    echo "Password: $pass";
}
?>