<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
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
            <h1 class="srodek">Archiwum Zwrotów</h1>
            <table class="tabela">
                <tr>
                    <td style="width: 12%; margin-right: 5px;">Nazwa Klienta BS</td>
                    <td>Numer Zamówienia BS</td>
                    <td>Numer Śledzenia</td>
                    <td>Data Zwrotu Produktu</td>
                    <td>Notatka</td>
                    <td>Zakończ / Przywróć</td>
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
                    if($kategoria == 'b')
                    {
                    echo '
                    <tr>
                    <td><img src="img/accept.png" style="width: 20px; height:20px; border-style: none;">'.$klient.'</td>
                    <td>'.$nr_zamowienia.'</td>
                    <td>'.$nr_sledzenia.'</td>
                    <td>'.$data_zwrotu.'</td>
                    <td>'.$notatka.'</td>
                    <td class="reszta"><a href = delete.php?id='.$id.'&tab='.$site.'>Skasuj</a>/<a href = commands/delete.php?id='.$id.'&op=a>Przywróć</a></td>
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