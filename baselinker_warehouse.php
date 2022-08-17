<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "session_test.php";
    require "connect.php";
    $all = $stal = $czarny = $bialy = $szary = $zloty = '';
    if(isset($_GET['paint']))
    {
      $kolor = $_GET['paint'];
      $sql = "SELECT * FROM warehouse_baselinker WHERE `Kolor` = '$kolor';";
      switch($kolor){
        case "Stal":
          $stal = "active";
          break;
        case "Czarny":
          $czarny = "active";
          break;
        case "Biały":
          $bialy = "active";
          break;
        case "Antracyt":
          $szary = "active";
          break;
        case "Złoty":
          $zloty = "active";
          break;
      }
    }
    else{
      $all = "active";
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

        <div class="row bialy">
            <div class="col-11">
            <h1 class="srodek">Magazyn Produkcja</h1>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a class="nav-link <?php echo $all ?>" aria-current="page" href="baselinker_warehouse.php">Pokaż Wszystkie</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $stal ?>" aria-current="page" href="baselinker_warehouse.php?paint=Stal">Stal</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $czarny ?>" aria-current="page" href="baselinker_warehouse.php?paint=Czarny">Czarny</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $bialy ?>" aria-current="page" href="baselinker_warehouse.php?paint=Biały">Biały</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $szary ?>" aria-current="page" href="baselinker_warehouse.php?paint=Antracyt">Antracyt</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $zloty ?>" aria-current="page" href="baselinker_warehouse.php?paint=Złoty">Złoty</a></li>
            </ul>
            <div class="filtr p-2" style="border-top: 1px solid black; border-bottom: 1px solid black; margin: 0;">
              <button class="Button Button--outline" onclick="printDiv()">Wydrukuj</button>
              <a href="functions/synchronization.php"><button class="Button Button--outline">Synchronizacja z magazynem</button></a>
              <form method="get" action="functions/print.php">
              <button class="Button Button--outline" type="submit">Wydrukuj zaznaczone</button>
            </div>
            <div id="printableTable">
              
              <table  class="table table-hover" id="myTable">
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
                                <td class="reszta">'.$ilosc.' szt</a></td>
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