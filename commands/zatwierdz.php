<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$czas_jest = $_GET['il'];
$czas_powinien = $_GET['pow'];
$kolumna = $_GET['kol'];
    require_once "../connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("UPDATE `karosek` SET `$kolumna` = '$czas_powinien'  WHERE `karosek`.`ID` = $id;"))
                {
                    header('Location: ../filtr.php?kolumna='.$kolumna.'');
                }
                else
                {
                    echo "$kolumna";
                    echo "cos sie zjebalo";
                }
            }
?>