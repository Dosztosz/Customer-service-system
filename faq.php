<?php
header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $sql = "SELECT * FROM faq;";
    $conn->set_charset("utf8");
	$result = $conn->query($sql);
    $site = "faq";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Faq Magnetic Mobel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
                $nazwa = $row['Nazwa'];
                $tresc = $row['Tresc'];
            echo '<button class="accordion">'.$nazwa.'</button>';
            echo '<div class="panel"><p>'.$tresc.'</p></div>';
            }
            ?>
        <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
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
            </div>
</body>

</html>