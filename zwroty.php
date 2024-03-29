<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "session_test.php";
    require "connect.php";
    require "functions.php";
    $sql = "SELECT * FROM zwroty ORDER BY kategoria ASC;";
	$result = $conn->query($sql);
    $site = "zwroty";
    if(isset($_GET['archive']))
    {
        archive();
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zwroty Klienci</title>
    <!--Head-->
    <?php require "addons/head.php"?>
</head>
<body>
    <!--Title-->
    <?php require 'addons/title.php'?>
<div class="row">
    <!--Navbar-->
    <?php require 'addons/navbar.php'?>
    <div class="col-11">
        <div class="row bialy">
            <div>
            <h1 class="srodek">Zwroty W trakcie</h1>
            <button class="accordion">Dodaj Zwrot</button>
            <div class="panel">
                <form method="POST" action="commands/dodaj_zwrot.php" name="dodaj_zwrot">
                    <div class="field" tabindex="2">
                        <input name="nazwa_up" type="text" placeholder="Nazwa Klienta" required><br>
                        <input name="nr_zamowien_up" type="text" placeholder="Numer Zamówienia" required><br>
                        <input name="nr_sledzenia_up" type="text" placeholder="Numer Śledzenia" required><br>
                        <input name="data_zwrot_up" type="date" placeholder="Data Zwrotu Produktu" required><br>
                        <input name="notatka_up" type="text" placeholder="Notatka" required>
                        <input type="submit" value="Dodaj">
		            </div>
                </form>
            </div>
            <script>
            var acc = document.getElementsByClassName("accordion");
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
                    <th style="width: 12%; margin-right: 5px;">Nazwa Klienta BS</td>
                    <th>Numer Zamówienia BS</th>
                    <th>Numer Śledzenia</th>
                    <th>Data Zwrotu Produktu</th>
                    <th>Notatka</th>
                    <th>Zakończ</th>
                </thead>
            <?php
                while($row = $result->fetch_assoc()) {
                    $id = $row['ID'];
                    $klient = $row['klient'];
                    $nr_zamowienia = $row['nr_zamowienia'];
                    $nr_sledzenia = $row['nr_sledzenia'];
                    $data_zwrotu = $row['data_zwrotu'];
                    $notatka = $row['notatka'];
                    $kategoria = $row['kategoria'];
                    if($kategoria == 'a')
                    {
                    echo '
                    <tr>
                    <td>'.$klient.'</td>
                    <td><a href="https://panel.baselinker.com/orders.php#status:all#search:'.$nr_zamowienia.'">'.$nr_zamowienia.'</a></td>
                    <td>'.$nr_sledzenia.'</td>
                    <td>'.$data_zwrotu.'</td>
                    <td>'.$notatka.'</td>
                    <td class="reszta"><a href=?id='.$id.'&op=b&archive>Zakończ</a></td>
                    </tr>';
                    }
                }
                echo "</table>";
            ?>
            </div>
    </div>
</div>
</body>

</html>