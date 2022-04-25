<?php
header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $sql = "SELECT * FROM paczki;";
    $conn->set_charset("utf8");
	$result = $conn->query($sql);
    $site = "zwroty";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Kurierzy</title>
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
    require 'addons/navbar.php'
    ?>
    <div class="col-11">
        <div class="row odstep bialy cien">
            <h1 class="srodek">Gdzie zwracać paczki i czym</h1>
            <hr>
            <h3 class="srodek">Niemcy</h3>
            <p class="srodek">Paczki zwracane z Niemiec są zwracany za pośrednictwem GLS DE. <br><b>Adres dostawy zwrotu do niemiec:</b> <br>
            Eurohermes / Magnetic Mobel<br>
            Rauschwalder Str 41<br>
            Görlitz, 02826<br>
            DE</p>    
            <hr>
            <h3 class="srodek">Francja / Włochy (niegotowe)</h3>
            <p class="srodek">Paczki zwracane z Francji są zwracany za pośrednictwem GLS PL, UPS, Furgonetka. Przed nadaniem paczki trzeba sprawdzić ceny na Furgonetka i UPS który wychodzi taniej </p>
            <hr>
            <h3 class="srodek">Ameryka i Reszta krajów (niegotowe)</h3>
            <p class="srodek">Paczki zwracane z Ameryki są zwracany za pośrednictwem GLS PL, UPS, Furgonetka. Przed nadaniem paczki trzeba sprawdzić ceny na Furgonetka i UPS który wychodzi taniej </p>
        </div>
    </div>
</div>
</body>

</html>