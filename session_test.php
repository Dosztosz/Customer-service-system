<?php
session_start();
if(isset($_SESSION['login_user']))
{
    $user = $_SESSION["login_user"];
}
else{
    header('Location: index.php');
}
?>