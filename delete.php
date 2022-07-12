<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$tab = $_GET['tab'];

if (isset($id))
{
    require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("DELETE FROM `$tab` WHERE `ID` = $id;"))
                {
                    if($tab == 'skroty'){
                        header('Location: index.php');
                    }
                    else {
                        header('Location: '.$tab.'.php');
                    }
                }
            }
}




?>