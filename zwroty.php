<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM zwroty ORDER BY kategoria ASC;";
	$result = $conn->query($sql);
    $site = "zwroty";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Zwroty Klienci</title>
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
            <div>
            <h1 class="srodek">Zwroty W trakcie</h1>
            <button class="accordion">Dodaj Zwrot</button>
            <div class="panel">
                <form method="POST" action="commands/dodaj_zwrot.php" name="dodaj_zwrot">
                    <div class="field" tabindex="2">
                        <input name="nazwa_up" type="text" placeholder="Nazwa Klienta" required><br>
                        <input name="nr_zamowien_up" type="text" placeholder="Numer Zamówienia" required><br>
                        <input name="nr_sledzenia_up" type="text" placeholder="Numer Śledzenia" required><br>
                        <input name="data_zwrot_up" type="text" placeholder="Data Zwrotu Produktu" required><br>
                        <input name="notatka_up" type="text" placeholder="Notatka" required>
                        <input type="submit" value="Dodaj" >
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
            <table class="tabela">
                <tr>
                    <td style="width: 12%; margin-right: 5px;">Nazwa Klienta BS</td>
                    <td>Numer Zamówienia BS</td>
                    <td>Numer Śledzenia</td>
                    <td>Data Zwrotu Produktu</td>
                    <td>Notatka</td>
                    <td>Przenieś do archiwum</td>
                </tr>
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
                    <td class="reszta"><a href=commands/archive.php?id='.$id.'&op=b>Zakończ</a></td>
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