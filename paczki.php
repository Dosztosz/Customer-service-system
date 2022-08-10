<?php
header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $sql = "SELECT * FROM paczki;";
	$result = $conn->query($sql);
    $site = "paczki";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Kurierzy</title>
<?php

require "addons/head.php";
?>
</head>

<body>
    <!--navbar-->
    <?php require 'addons/title.php'?>
<div class="row">
    <?php require 'addons/navbar.php'?>
    <div class="col-11">
        <div class="row odstep bialy cien">
            <h1 class="srodek">Gdzie wysyłać paczki i czym</h1>
            <hr>
            <h3 class="srodek">Paczki</h3>
            <table class="table table-striped">
                <thead>
                    <th class="kurierzy">Kraj</th>
                    <th>do 2 kg</th>
                    <th>do 5 kg</th>
                    <th>do 10 kg</th>
                    <th>do 15 kg</th>
                    <th>do 25 kg</th>
                    <th>do 30 kg</th>
                    <th>do 40 kg</th>
                </thead>
                <?php
                        while($row = $result->fetch_assoc()) {
                            $kraj = $row['kraj'];
                            $dwa = $row['2kg'];
                            $piec = $row['5kg'];
                            $dziesiec = $row['10kg'];
                            $pietnascie = $row['15kg'];
                            $dwardziesciapiec = $row['25kg'];
                            $trzydziesci = $row['30kg'];
                            $czterdziesci = $row['40kg'];
                            echo "<tr>";
                            echo '<td class="kurierzy">'.$kraj.'</td>';
                            echo "<td>".$dwa."</td>";
                            echo "<td>".$piec."</td>";
                            echo "<td>".$dziesiec."</td>";
                            echo "<td>".$pietnascie."</td>";
                            echo "<td>".$dwardziesciapiec."</td>";
                            echo "<td>".$trzydziesci."</td>";
                            echo "<td>".$czterdziesci."</td>";
                            echo "</tr>";
                        }
                ?>
               
            
        </table>
        </div>
    </div>
</div>
</body>

</html>