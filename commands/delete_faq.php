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
                if($conn->query("DELETE FROM `faq` WHERE `faq`.`ID` = $id;"))
                {
                                        header('Location: ../faq.php');
                }
            }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Odpowiedzi</title>
    <?php

    require "addons/head.php";
?>
</head>

<body>
    <!--navbar-->
    <?php
    require 'addons/title.php'
?>

<div class="row">
    <?php 
    require 'addons/navbar.php';
    ?>
    <div class="col-11">
    <div class="row odstep bialy cien">
            <div class="col-6">
                <!--wypis odpowiedzi-->
            <h1 class="srodek">Odpowiedzi</h1>
            <hr>
            <center>
                <a href="dodanie.php"><button>Stwórz odpowiedź</button></a>
            </center>

<form method="post">
<table>
    <tr>
        <td>Ilość: </td>
        <td><input type="text" value="<?php echo "$ilosc"?>" name="ilosc" required></td>
    </tr>
</table>
<input type="submit" value="akceptuj">
</form>
</div>
</div>