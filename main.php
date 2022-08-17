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
            <div class="col-6 odpowiedzi">
                <!--wypis odpowiedzi-->
            <h1 class="srodek">Odpowiedzi</h1>
            <hr>
            <a href="dodanie.php"><button>Stwórz odpowiedź</button></a>
                <?php
                    while($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $nazwa = $row['Nazwa'];
                        $niemiecki = $row['niemiecki'];
                        $francuski = $row['francuski'];
                        $wloski = $row['wloski'];
                        $polski = $row['polski'];
                        $angielski = $row['angielski'];
                        echo "<h2>".$nazwa."</h2>";
                        echo '<button onClick="SelfCopy(this.id)" id="'.$niemiecki.'"><img src="img/de.svg">po niemiecku</button>';
                        echo '<button onClick="SelfCopy(this.id)" id="'.$francuski.'"><img src="img/fr.svg">po francusku</button>';
                        echo '<button onClick="SelfCopy(this.id)" id="'.$wloski.'"><img src="img/it.svg">po wlosku</button>';
                        echo '<button onClick="SelfCopy(this.id)" id="'.$polski.'"><img src="img/pl.svg">po polsku</button>';
                        echo '<button onClick="SelfCopy(this.id)" id="'.$angielski.'"><img src="img/us.svg">po angielsku</button>';
                        echo '<a href="?delete&id='.$id.'" style="color: red;">usuń</a>';
                    }
                ?>
            </div>
            <div class="col-5">
                <h1 class="srodek">Kalkulator</h1>
                <hr>
                <h2>Wybierz na co chcesz przeliczyć wartości</h2>
                <button onclick="calculator()">Cm na Cale</button>
                <button>Cale na Cm</button>
                <button>Cm na Stopy</button>
                <button>Stopy na Cm</button>
                <button>Kg na Funty</button>
                <button>Funty na Kg</button>
                <div class="p-1">
                    <label class="contactform-label" for="contactform-member">Kalkulator:</label>
                    <input class="contactform-input input" type="text" id="input-data" placeholder="Cm" />
                    <span id="result"></span>
                </div>
                    <!--pole tekstowe-->
                <h3>pole tekstowe</h3>
                <textarea rows="25" cols="80"></textarea>
            </div>
            </div>
            </div>
</body> 
</html>