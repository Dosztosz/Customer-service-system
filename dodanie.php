<?php
header("Content-Type: text/html;charset=UTF-8");
$site = "odpowiedzi";
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");

    if (isset($_POST['nazwa']))
	{
		//sprawdzanie nazwaname
        $nazwa = $_POST['nazwa'];
		$niemiecki = $_POST['niemiecki'];
        $francuski = $_POST['francuski'];
        $wloski = $_POST['wloski'];
        $polski = $_POST['polski'];
        $angielski = $_POST['angielski'];

        if($conn->query("INSERT INTO `skroty` (`id`, `Nazwa`, `niemiecki`, `francuski`, `wloski`, `polski`, `angielski`) VALUES (NULL,'$nazwa','$niemiecki', '$francuski', '$wloski', '$polski', '$angielski');"))
        {
            header('Location: index.php');
    }
    else
    {
        throw new Exception($conn->error);
        
    }
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Odpowiedzi</title>
    <?php

    require "addons/head.php";
?>
</head>
<body>
 <!--navbar-->
 <?php
    require 'addons/title.php'
?>

<div class="row">
    <?php 
    require 'addons/navbar.php';
    ?>
    <div class="col-11">

        <div class="row odstep bialy cien">
            <div class="col-6">
                <!--wypis odpowiedzi-->
            <h1 class="srodek">Stwórz Odpowiedź</h1>
            <hr>
<form method="post">
			Nazwa: <br> <textarea class="pisanie" rows="1" cols="50" id="wklej" name="nazwa"></textarea> <br>
			Po niemiecku: <br> <textarea class="pisanie" rows="20" cols="100" id="wklej" name="niemiecki"></textarea> <br>	
			Po Francusku: <br> <textarea class="pisanie" rows="20" cols="100" id="wklej" name="francuski"></textarea> <br>		
			Po Włosku: <br> <textarea class="pisanie" rows="20" cols="100" id="wklej" name="wloski"></textarea> <br>	
            Po Polsku: <br> <textarea class="pisanie" rows="20" cols="100" id="wklej" name="polski"></textarea> <br>
            Po Angielsku: <br> <textarea class="pisanie" rows="20" cols="100" id="wklej" name="angielski"></textarea> <br>	
	<input type="submit" value="Dodaj Odpowiedź">
		
</form>
            </div>
        </div>
</body>
</html>
