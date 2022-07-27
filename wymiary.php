<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $sql = "SELECT * FROM wymiary;";
	$result = $conn->query($sql);
    $site = "wymiary";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Wymiary Paczek</title>
    <?php require "addons/head.php"?>
</head>

<body>
<?php require 'addons/title.php'?>
<div class="row">
<?php require 'addons/navbar.php'?>
    <div class="col-11">

        <div class="row odstep bialy cien">
        <h1 class="srodek">Wymiary paczek do wysyłki</h1>
            <div class="col-12">
            <h1 class="srodek">Wymiary EU</h1>
            <button class="accordion_new">Dodaj Wymiar Paczki</button>
            <div class="panel">
                <form method="POST" action="functions/add_size.php">
                    <div class="field" tabindex="2">
                        <input name="name" type="text" placeholder="Nazwa" required><br>
                        <input name="size_cm" type="text" placeholder="Wymiar cm" required><br>
                        <input name="size_inch" type="text" placeholder="Wymiar cale" required><br>
                        <input name="weight_kg" type="text" placeholder="Waga kg" required><br>
                        <input name="weight_pound" type="text" placeholder="Waga funt" required>
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
            <table class="table table-hover">
                <thead>
                    <th style="width: 12%; margin-right: 5px;">Nazwa</th>
                    <th>Wymiar</th>
                    <th>Waga</th>
                    <th>US</th>
                    <th style="width: 12%; margin-right: 5px;">Nazwa</th>
                    <th>Wymiar</th>
                    <th>Waga</th>
                    <th>edycja</th>
                </thead>
            <?php
                while($row = $result->fetch_assoc()) {
                    $id = $row['Id'];
                    $nazwa = $row['nazwa'];
                    $wymiar_cm = $row['wymiarcm'];
                    $waga_kg = $row['wagakg'];
                    $wymiar_cale = $row['wymiarcale'];
                    $wagafunt = $row['wagafunt'];
                    echo '
                    <tr>
                    <td>'.$nazwa.'</td>
                    <td>'.$wymiar_cm.' cm</td>
                    <td>'.$waga_kg.' kg</td>
                    <td>us</td>
                    <td>'.$nazwa.'</td>
                    <td>'.$wymiar_cale.' cali</td>
                    <td>'.$wagafunt.' funt</td>
                    <td><a href="edytuj_paczka.php?id='.$id.'&naz='.$nazwa.'&wym='.$wymiar_cm.'&wagkg='.$waga_kg.'&wymcal='.$wymiar_cale.'&wagfunt='.$wagafunt.'">edytuj</a></td>
                    <td><a href="delete.php?id='.$id.'&tab='.$site.'">Usuń</a></td>
                    </tr>';
                }
            ?>
            </table>
            </div>
    </div>
</div>
</body>

</html>