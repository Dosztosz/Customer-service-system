<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM wymiary;";
	$result = $conn->query($sql);
    $site = "wymiar";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Wymiary Paczek</title>
    <?php
    require "addons/head.php"
    ?>
</head>

<body>
<?php
    require 'addons/title.php'
?>
<div class="row">
<?php
    require 'addons/navbar.php'
    ?>
    <div class="col-11">

        <div class="row odstep bialy cien">
        <h1 class="srodek">Wymiary paczek do wysyłki</h1>
            <div class="col-12">
            <h1 class="srodek">Wymiary EU</h1>
            <button class="accordion_new">Dodaj Wymiar Paczki</button>
            <div class="panel">
                <form method="POST">
                    <div class="field" tabindex="2">
                        <input name="nazwa_up" type="text" placeholder="Nazwa Klienta" required><br>
                        <input name="nr_zamowien_up" type="text" placeholder="Numer Zamówienia" required><br>
                        <input name="nr_sledzenia_up" type="text" placeholder="Numer Śledzenia" required><br>
                        <input name="data_zwrot_up" type="text" placeholder="Data Zwrotu Produktu" required><br>
                        <input name="notatka_up" type="text" placeholder="Notatka" required>
                        <input type="submit" value="Dodaj">
		            </div>
                </form>
            </div>
            <script>
var acc = document.getElementsByClassName("accordion_new");
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
            <table class="tabela">
                <tr>
                    <td style="width: 12%; margin-right: 5px;">Nazwa</td>
                    <td>Wymiar</td>
                    <td>Waga</td>
                    <td>US</td>
                    <td style="width: 12%; margin-right: 5px;">Nazwa</td>
                    <td>Wymiar</td>
                    <td>Waga</td>
                    <td>edycja</td>
                </tr>
            <?php
                while($row = $result->fetch_assoc()) {
                    $id = $row['Id'];
                    $nazwa = $row['nazwa'];
                    $wymiar_cm = $row['wymiarcm'];
                    $waga_kg = $row['wagakg'];
                    $wymiar_cale = $row['wymiarcale'];
                    $wagafunt = $row['wagafunt'];
                    $kategoria = $row['kategoria'];
                    echo '
                    <tr>
                    <td>'.$nazwa.'</td>
                    <td>'.$wymiar_cm.' cm</td>
                    <td>'.$waga_kg.' kg</td>
                    <td>us</td>
                    <td>'.$nazwa.'</td>
                    <td>'.$wymiar_cale.' cali</td>
                    <td>'.$wagafunt.' funt</td>
                    <td><a href="commands/edytuj_paczka.php?id='.$id.'&naz='.$nazwa.'&wym='.$wymiar_cm.'&wagkg='.$waga_kg.'&wymcal='.$wymiar_cale.'&wagfunt='.$wagafunt.'&kategoria='.$kategoria.'">edytuj</a></td>
                    </tr>';
                }

            echo "</table>";
            ?>
            </div>
    </div>
</div>
</body>

</html>