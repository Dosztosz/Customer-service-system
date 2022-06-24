<?php
header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $sql = "SELECT * FROM warehouse_baselinker;";
    $conn->set_charset("utf8");
	  $result = $conn->query($sql);
    $site = "baselinker";
    ?>


<!DOCTYPE html>
<html lang="en">
<Style>
@media print {
  * {
    display: none;
  }
  #printableTable {
    display: block;
  }
}
    </style>
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

        <div class="row odstep bialy cien" id="printableTable">
            <div class="col-11">
                <!--wypis produktow-->
            <h1 class="srodek">Magazyn Produkcja</h1>
            <hr>
            <button class="Button Button--outline" onclick="printDiv()">Wydrukuj</button>
            <table id="myTable">
              <thead>
                <th>Nazwa</th>
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
                        if ($ilosc <= 2) {
                            if($kolory != "Stal")
                            {
                            echo "<tr>";
                            echo '<td class="reszta">'.$nazwa.'</td>
                            <td class="reszta">'.$profil.'</td>
                            <td class="reszta">'.$rozmiar.'</td>
                            <td class="reszta">'.$kolory.'</td>';
                            echo '<td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'&naz='.$nazwa.'>'.$ilosc.' szt</a></td>';
                            echo "</tr>";
                            }
                            elseif($kolory == "Stal" && $ilosc < 0)
                            {
                                echo "<tr>";
                                echo '<td class="reszta">'.$nazwa.'</td>
                                <td class="reszta">'.$profil.'</td>
                                <td class="reszta">'.$rozmiar.'</td>
                                <td class="reszta">'.$kolory.'</td>';
                                echo '<td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'&naz='.$nazwa.'>'.$ilosc.' szt</a></td>';
                                echo "</tr>";
                            }
                        }
                    }
                    
                        ?>
                        </form>
            </table>
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