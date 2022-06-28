<?php
header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $sql = "SELECT * FROM karosek;";
    $conn->set_charset("utf8");
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
            <hr>
            <!--wyszukiwani-->
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Wyszukaj...">
            <a href="nowy_produkt.php"><button>Dodaj produkt (nie działa)</button></a>
            <!--Harmonijka-->
            <button class="sortowanie">Wyświetl niezgodne</button>
            <div class="sortowanie_out">
            <a href="filtr.php?kolumna=czas_jest"><button>Amazon</button></a>
            <a href="filtr.php?kolumna=ebay"><button>Ebay</button></a>
            <a href="filtr.php?kolumna=shopper"><button>Shopper</button></a>
            <a href="filtr.php?kolumna=kaufland"><button>Kaufland</button></a>
            <a href="filtr.php?kolumna=cdiscount"><button>Cdiscount</button></a>
            <a href="filtr.php?kolumna=etsy"><button>Etsy</button></a>
            <a href="filtr.php?kolumna=allegro"><button>Allegro</button></a>
            </div>
            <script>
            var acc = document.getElementsByClassName("sortowanie");
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
            <!--Tabela-->
            <table id="myTable">
              <tr>
                <td>Nazwa</td>
                <td>Ilość</td>
                <td>Czas wysyłki</td>
                <td>Amazon</td>
                <td>Shop</td>
                <td>Kauf</td>
                <td>All</td>

              </tr>

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
                        if($nazwa != "Siedzisko")
                        {
                          echo "<tr>";
                          echo '<td class="duze">'.$nazwa.' | '.$profil.' | '.$rozmiar.' | '.$kolory.'</td>';
                          echo '<td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'>'.$ilosc.' szt</a></td>';
                          echo '<td class="reszta '.$kolor.'">'.$czas_powinien.' dni</td>';
                          echo '<td class="reszta '.$kolor_klasa.'">'.$czas_jest.' dni</td>';
                          echo '<td class="reszta '.$kolor_klasa2.'">'.$shopper.' dni</td>';
                          echo '<td class="reszta '.$kolor_klasa3.'">'.$kaufland.' dni</td>';
                          echo '<td class="reszta '.$kolor_klasa6.'">'.$allegro.' dni</td>';
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