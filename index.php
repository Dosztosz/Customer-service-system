<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM skroty;";
	$result = $conn->query($sql);
    $site = "odpowiedzi";
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
            <h1 class="srodek">Odpowiedzi</h1>
            <hr>
            <center>
                <a href="dodanie.php"><button>Stwórz odpowiedź</button></a>
            </center>
        <?php
                    

                    while($row = $result->fetch_assoc()) {
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
                    }
                        ?>
            </div>
            <div class="col-5">
                <h1 class="srodek">Kalkulator</h1>
                <hr>
                <!--kalkulator-->
            <label class="contactform-label" for="contactform-member">Przelicznik na Cale:</label>
            <input class="contactform-input input" type="text" id="contactform-member" placeholder="Member" name="member" value="" onkeyup="fun()" />
            <span id="wynik"></span> '
            <br>
            <label class="contactform-label" for="contactform-centymetry">Przelicznik na Centymetry:</label>
            <input class="contactform-input input" type="text" id="contactform-centymetry" placeholder="centymetry" name="centymetry" value="" onkeyup="centymetry()" />
            <span id="wynik_centymetry"></span> cm
            <br>
            <label class="contactform-label" for="contactform-funt">Przelicznik na Funty:</label>
            <input class="contactform-input input" type="text" id="contactform-funt" placeholder="funt" name="funt" value="" onkeyup="funt()" />
            <span id="wynik_funt"></span> funtów
            <br>
            <label class="contactform-label" for="contactform-kilogram">Przelicznik na Kilogramy:</label>
            <input class="contactform-input input" type="text" id="contactform-kilogram" placeholder="kilogram" name="kilogram" value="" onkeyup="kilogram()" />
            <span id="wynik_kilogram"></span> Kg
            <br>
            <label class="contactform-label" for="contactform-kilogram">Przelicznik na Stoopki:</label>
            <input class="contactform-input input" type="text" id="contactform-stoopki" placeholder="stoopki" name="kilogram" value="" onkeyup="stoopki()" />
            <span id="wynik_stoopki"></span> Ft
            <br>
            <label class="contactform-label" for="contactform-kilogram">Przelicznik na centymetry (ze stoopek):</label>
            <input class="contactform-input input" type="text" id="contactform-stoopkicm" placeholder="stoopki_cm" name="kilogram" value="" onkeyup="stoopki_cm()" />
            <span id="wynik_stoopki_cm"></span> cm
                <!--pole tekstowe-->
            <h3>pole tekstowe</h3>
            <textarea rows="25" cols="80" id="wklej"></textarea>
            </div>
            </div>
            </div>
</body>

</html>