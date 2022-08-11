<?php
header("Content-Type: text/html;charset=UTF-8");
require "session_test.php";
require "connect.php";
$site = "magazyn";
if (isset($_POST['nazwa']))
{
    $nazwa=$_POST['nazwa'];
    $profil=$_POST['profil'];
    $rozmiar=$_POST['rozmiar'];
    require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("INSERT INTO `karosek` (`ID`, `Nazwa`, `Profil`, `Rozmiar`, `Kolor`, `Ilosc`, `czas_jest`, `ebay`,`shopper`,`kaufland`,`cdiscount`,`etsy`,`allegro` ) VALUES (NULL, '$nazwa', '$profil', '$rozmiar', 'stal', '0', '0', '0', '0', '0', '0', '0', '0');"))
                {
                    if($conn->query("INSERT INTO `karosek` (`ID`, `Nazwa`, `Profil`, `Rozmiar`, `Kolor`, `Ilosc`, `czas_jest`, `ebay`,`shopper`,`kaufland`,`cdiscount`,`etsy`,`allegro` ) VALUES (NULL, '$nazwa', '$profil', '$rozmiar', 'czarny', '0', '0', '0', '0', '0', '0', '0', '0');"))
                    {
                        if($conn->query("INSERT INTO `karosek` (`ID`, `Nazwa`, `Profil`, `Rozmiar`, `Kolor`, `Ilosc`, `czas_jest`, `ebay`,`shopper`,`kaufland`,`cdiscount`,`etsy`,`allegro` ) VALUES (NULL, '$nazwa', '$profil', '$rozmiar', 'biały', '0', '0', '0', '0', '0', '0', '0', '0');"))
                        {
                            if($conn->query("INSERT INTO `karosek` (`ID`, `Nazwa`, `Profil`, `Rozmiar`, `Kolor`, `Ilosc`, `czas_jest`, `ebay`,`shopper`,`kaufland`,`cdiscount`,`etsy`,`allegro` ) VALUES (NULL, '$nazwa', '$profil', '$rozmiar', 'antracyt', '0', '0', '0', '0', '0', '0', '0', '0');"))
                            {
                                if($conn->query("INSERT INTO `karosek` (`ID`, `Nazwa`, `Profil`, `Rozmiar`, `Kolor`, `Ilosc`, `czas_jest`, `ebay`,`shopper`,`kaufland`,`cdiscount`,`etsy`,`allegro` ) VALUES (NULL, '$nazwa', '$profil', '$rozmiar', 'złoty', '0', '0', '0', '0', '0', '0', '0', '0');"))
                                {
                                    header('Location: magazyn.php');
                                }
                            }
                        }
                    }
                }
                else{
                    echo 'cos idzie nie tak';
                }
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

<div class="row bialy">
    <div class="col-6">
        <!--wypis odpowiedzi-->
    <h1 class="srodek">Wstaw nowy produkt</h1>
    <hr>
<table>
<form method="post">
    <tr>
        <td>Nazwa</td>
        <td><input type="text" name="nazwa" required></td>
    </tr>
    <tr>
        <td>Profil</td>
        <td><input type="text" name="profil" required></td>
    </tr>
    <tr>
        <td>Rozmiar</td>
        <td><input type="text" name="rozmiar" required></td>
    </tr>
</table>
<input type="submit" value="akceptuj">
</form>
</div>
            </div>
            </div>

</body>

</html>