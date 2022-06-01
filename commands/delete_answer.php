<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];

if (isset($id))
{
    require_once "../connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("DELETE FROM `skroty` WHERE `skroty`.`id` = '$id'"))
                {
                                        header('Location: ../index.php');
                }
            }
}




?>