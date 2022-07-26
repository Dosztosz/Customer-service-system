<?php
header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $sql = "SELECT * FROM karosek;";
	  $result = $conn->query($sql);
    $site = "magazyn";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Magazyn</title>
<?php

require "addons/head.php";
?>
</head>

<body>
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
            <h1 class="srodek">Magazyn na Karosku</h1>
            <hr>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Wyszukaj...">
            <a href="nowy_produkt.php"><button>Dodaj produkt</button></a>
            <table id="myTable">
              <thead>
                <th>Nazwa</th>
                <th>Ilość</th>
                <th>Edycja</th>
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
                        $amzde = "kebs";
                        $kolor_klasa = "none";
                        $kolor_klasa1 = "none";
                        $kolor_klasa2 = "none";
                        $kolor_klasa3 = "none";
                        $kolor_klasa4 = "none";
                        $kolor_klasa5 = "none";
                        $kolor_klasa6 = "none";
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
                        if ($ilosc >5 )
                        {
                          $czas_powinien = "1";
                        }
                        if ($czas_jest == $czas_powinien)
                        {
                          $kolor_klasa = $kolor;
                        }
                        if ($ebay == $czas_powinien)
                        {
                          $kolor_klasa1 = $kolor;
                        }
                        if ($shopper == $czas_powinien)
                        {
                          $kolor_klasa2 = $kolor;
                        }
                        if ($kaufland == $czas_powinien)
                        {
                          $kolor_klasa3 = $kolor;
                        }
                        if ($cdiscount == $czas_powinien)
                        {
                          $kolor_klasa4 = $kolor;
                        }
                        if ($etsy == $czas_powinien)
                        {
                          $kolor_klasa5 = $kolor;
                        }
                        if ($allegro == $czas_powinien)
                        {
                          $kolor_klasa6 = $kolor;
                        }
                        echo "<tr>";
                        echo '<td class="duze">'.$nazwa.' | '.$profil.' | '.$rozmiar.' | '.$kolory.'</td>';
                        echo '<td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'&naz='.$nazwa.'>'.$ilosc.' szt</a></td>';
                        echo '<td class="reszta '.$kolor.'">'.$czas_powinien.' dni</td>';
                        echo "</tr>";
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