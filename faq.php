<?php
header("Content-Type: text/html;charset=UTF-8");
require "session_test.php";
    require "connect.php";
    $sql = "SELECT * FROM faq;";
	$result = $conn->query($sql);
    $site = "faq";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Faq Magnetic Mobel</title>
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
            <div class="col-11">
                <!--wypis odpowiedzi-->
            <h1 class="srodek">Faq</h1>
            <hr>
            <a href="dodanie_faq.php"><button>Stwórz FAQ</button></a>
            <?php
            while($row = $result->fetch_assoc()) {
                $id = $row['ID'];
                $nazwa = $row['Nazwa'];
                $tresc = $row['Tresc'];
            echo '<button class="accordion">'.$nazwa.'</button>';
            echo '<div class="panel faq_image"><p>'.$tresc.'</p><a style="font: size 5px; color: red;" href=delete.php?id='.$id.'&tab='.$site.'>skasuj</a></div>';
            }
            ?>
        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
        </script>
        </div>
            </div>
            </div>
            </div>
</body>

</html>