<?php
header("Content-Type: text/html;charset=UTF-8");
require "session_test.php";
  require "connect.php";
  $sql = "SELECT * FROM karosek;";
	$result = $conn->query($sql);
  $site = "magazyn_biuro";
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Magazyn_biuro</title>
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
    <!--menu pionowe-->
    <?php
    require 'addons/navbar.php'
    ?>
    <div class="col-11">
        <div class="row odstep bialy cien">
            <div class="col-11">
                <!--wypis produktow-->
            <h1 class="srodek">Magazyn Biuro</h1>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="magazyn_biuro.php">Pokaż Wszystkie</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=czas_jest">Amazon</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=ebay">Ebay</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=shopper">Shopper</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=kaufland">Kaufland</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=cdiscount">Cdiscount</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=etsy">Etsy</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="filtr.php?kolumna=allegro">Allegro</a></li>
            </ul>
            <!--wyszukiwani-->
            <div class="searchbar p-2">
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Wyszukaj...">
            </div>
            <!--Tabela-->
            <table class="table table-hover" id="myTable">
              <thead>
                <th>Nazwa</th>
                <th>Ilość</th>
                <th>Dostawa</th>
                <th>Amazon</th>
                <th>Shoper</th>
                <th>Kaufland</th>
                <th>Allegro</th>

              </thead>

        <?php
                  while($row = $result->fetch_assoc()) {
                    $id = $row['ID'];
                    $nazwa = $row['Nazwa'];
                    $profil = $row['Profil'];
                    $rozmiar = $row['Rozmiar'];
                    $kolory = $row['Kolor'];
                    $ilosc = $row['Ilosc'];
                    $czas_jest = $row['czas_jest'];
                    $ebay = $row['ebay'];
                    $shopper = $row['shopper'];
                    $kaufland = $row['kaufland'];
                    $cdiscount = $row['cdiscount'];
                    $etsy = $row['etsy'];
                    $allegro = $row['allegro'];
                    if (empty($czas_jest))
                    {
                      $czas_jest = "none";
                    }
                    if ($ilosc <= 5 AND $ilosc >= 1) {
                      $kolor = "zolty";
                      $czas_powinien = "7";
                    }
                    elseif ($ilosc <= 0)
                    {
                      $kolor = "czerwony";
                      $czas_powinien = "20";
                    }
                    elseif ($ilosc > 5)
                    {
                      $kolor ="zielony";
                      $czas_powinien = "1";
                    }
                    if($nazwa != "Siedzisko")
                    {
                      echo "<tr>";
                      echo '<td class="duze">'.$nazwa.' | '.$profil.' | '.$rozmiar.' | '.$kolory.'</td>';
                      echo '<td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'>'.$ilosc.' szt</a></td>';
                      echo '<td class="reszta">'.$czas_powinien.' dni</td>';
                      echo '<td class="reszta">'.$czas_jest.' dni</td>';
                      echo '<td class="reszta">'.$shopper.' dni</td>';
                      echo '<td class="reszta">'.$kaufland.' dni</td>';
                      echo '<td class="reszta">'.$allegro.' dni</td>';
                      echo '<td class="reszta"><a href = update_marketplace.php?id='.$id.'&il='.$czas_jest.'&eb='.$ebay.'&sh='.$shopper.'&kauf='.$kaufland.'&cdi='.$cdiscount.'&etsy='.$etsy.'&all='.$allegro.'>Update</a></td>';
                      echo "</tr>";
                      }
                    }                   
                    ?>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

                        </form>
            </table>
            </div>
            </div>
            </div>
</body>

</html>