<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "session_test.php";
    require "connect.php";
    require "functions.php";
    $sql = "SELECT * FROM skroty;";
	$result = $conn->query($sql);
    $site = "skroty";
    if (isset($_GET['delete']))
        {
            delete($_GET['id'], $site);
        }
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Odpowiedzi</title>
    <!--Header-->
    <?php require "addons/head.php";?>
</head>

<body>
    <!--navbar-->
    <?php require 'addons/title.php';?>
<div class="row">
    <?php 
    require 'addons/navbar.php';
    ?>
    <div class="col-11">
        
    </div>
</body> 
</html>