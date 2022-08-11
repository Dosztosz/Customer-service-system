<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$op = $_GET['op'];

if (isset($id))
{
    require_once "../connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("UPDATE `zwroty` SET `kategoria` = '$op' WHERE `zwroty`.`ID` = $id;"))
                {
                                        header('Location: ../zwroty.php');
                }
            }
}
?>