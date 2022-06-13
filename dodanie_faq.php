<?php
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    $site="faq";

    if (isset($_POST['nazwa']))
	{
		
		//sprawdzanie nazwaname
        $nazwa = $_POST['nazwa'];
		$tresc = $_POST['tresc'];

        if($conn->query("INSERT INTO `faq` (`id`, `Nazwa`, `Tresc`) VALUES (NULL,'$nazwa','$tresc');"))
        {
            header('Location: faq.php');
            
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
<title>Dodanie FAQ</title>
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
            <h1 class="srodek">Dodaj Odpowiedź</h1>

            <form method="post">
                        Nazwa: <br> <textarea class="pisanie" rows="1" cols="50" id="wklej" name="nazwa"></textarea> <br>
                        Tresc (w html): <br> <textarea class="pisanie" rows="20" cols="100" id="wklej" name="tresc"></textarea> <br>	

                <input type="submit" value="Dodaj Odpowiedź"> 
            </form>
            <h2>Poradnik</h2>
            <ol>
                <li>Aby dać większy tekst użyj zakładki < h1-h5 > pamiętaj o zamknięciu przy pomocy < /h1-h5></li>
            </ol>
        </div>
    </div>
    
</body>
</html>
