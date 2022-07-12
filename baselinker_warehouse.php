<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    if(isset($_GET['paint']))
    {
      $kolor = $_GET['paint'];
      $sql = "SELECT * FROM warehouse_baselinker WHERE `Kolor` = '$kolor';";
    }
    else{
      $sql = "SELECT * FROM warehouse_baselinker;";
    }
	  $result = $conn->query($sql);
    $site = "baselinker";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Magazyn</title>
<?php
require "addons/head.php";
?>
<link href="assets/css/style.css" rel="stylesheet" media="print">
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
            <h1 class="srodek">Magazyn Produkcja</h1>
            <hr>
            <button class="Button Button--outline" onclick="printDiv()">Wydrukuj</button>
            <a href="functions/synchronization.php"><button class="Button Button--outline">Synchronizacja z magazynem</button></a>
            <p>Filtry:</p>
            <a href="baselinker_warehouse.php?paint=Stal"><button class="Button Button--outline">Stal</button></a>
            <a href="baselinker_warehouse.php?paint=Czarny"><button class="Button Button--outline">Czarny</button></a>
            <a href="baselinker_warehouse.php?paint=Biały"><button class="Button Button--outline">Biały</button></a>
            <a href="baselinker_warehouse.php?paint=Antracyt"><button class="Button Button--outline">Szary</button></a>
            <a href="baselinker_warehouse.php?paint=Złoty"><button class="Button Button--outline">Złoty</button></a>
            <a href="baselinker_warehouse.php"><button class="Button Button--outline">Wyczyść Filtr</button></a>
            <form method="get" action="functions/print.php">
            <input type="submit" value="Submit">

            <div id="printableTable">
              <table id="myTable">
                <thead>
                  <th>Wybierz</th>
                  <th>Nazwa</th>
                  <th>Profil</th>
                  <th>Rozmiar</th>
                  <th>Kolor</th>
                  <th>Ilość</th>
                </thead>

                  <?php
                      while($row = $result->fetch_assoc()) {
                          $id = $row['ID'];
                          $nazwa = $row['Nazwa'];
                          $profil = $row['Profil'];
                          $rozmiar = $row['Rozmiar'];
                          $kolory = $row['Kolor'];
                          $ilosc = $row['Ilosc'];
                          $import = "<tr>
                          <td>$nazwa</td>
                          <td>$profil</td>
                          <td>$rozmiar</td>
                          <td>$kolory</td>
                          <td>$ilosc szt</td>
                          </tr>";
                          if ($ilosc <= 2) {
                              if($kolory != "Stal")
                              {
                                echo '
                                <td class="reszta"><input type="checkbox" name="nazwa[]" value="'.$import.'"></td>
                                <td class="reszta">'.$nazwa.'</td>
                                <td class="reszta">'.$profil.'</td>
                                <td class="reszta">'.$rozmiar.'</td>
                                <td class="reszta">'.$kolory.'</td>
                                <td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'&naz='.$nazwa.'>'.$ilosc.' szt</a></td>
                                </tr>';
                              }
                              elseif($kolory == "Stal" && $ilosc < 0)
                              {
                                echo '
                                <td class="reszta"><input type="checkbox" name="nazwa[]" value="'.$import.'"></td>
                                <td class="reszta">'.$nazwa.'</td>
                                <td class="reszta">'.$profil.'</td>
                                <td class="reszta">'.$rozmiar.'</td>
                                <td class="reszta">'.$kolory.'</td>
                                <td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'&naz='.$nazwa.'>'.$ilosc.' szt</a></td>
                                </tr>';
                              }
                          }
                      }

                          ?>
                          </form>
              </table>
                    </div>
            </div>
            </div>
            </div>
            <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
<script type="text/javascript">
    function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>
</body>

</html>