<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$nazwa = $_GET['naz'];
$wymiar_cm = $_GET['wym'];
$waga_kg = $_GET['wagkg'];
$wymiar_cale = $_GET['wymcal'];
$wagafunt = $_GET['wagfunt'];
$kategoria = $_GET['kategoria'];
$site = "wymiar";




if (isset($_POST['nazwa']))
{
    $nazwa_n = $_POST['nazwa'];
    $wymiar_cm_n = $_POST['wymiarcm'];
    $waga_kg_n = $_POST['wagakg'];
    $wymiar_cale_n = $_POST['wymiarcal'];
    $waga_funt_n = $_POST['wagafunt'];
    $kategoria_n = $_POST['kategoria'];
    require_once "../connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    if ($conn->connect_errno!=0)
			{
				echo "bład";
			}
            else {
                if($conn->query("UPDATE `wymiary` SET `nazwa` = '$nazwa_n', `wymiarcm` = '$wymiar_cm_n', `wagakg` = '$waga_kg_n', `wymiarcale` = '$wymiar_cale_n', `wagafunt` = '$waga_funt_n', `kategoria` = '$kategoria_n'  WHERE `Id` = $id;"))
                {
                    header('Location: ../wymiar.php');
                }
                else
                {
                    echo "no coś ci nie idzie";
                    echo $conn;
                }
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Odpowiedzi</title>
    <?php
    require "../addons/head.php";
?>
</head>

<body>
    <!--navbar-->
    <?php
    require '../addons/title.php'
?>
<div class="row">
    <?php 
    require '../addons/navbar.php';
    ?>
    <div class="col-11">
    <div class="row odstep bialy cien">
            <div class="col-6">
                <!--wypis odpowiedzi-->
            <h1 class="srodek">Edycja Paczki</h1>
            <hr>

<form method="post">
<table>
    <tr>
        <td>Nazwa </td>
        <td><input type="text" value="<?php echo "$nazwa"?>" name="nazwa" required></td>
    </tr>
    <tr>
        <td>Wymiar w CM </td>
        <td><input type="text" value="<?php echo "$wymiar_cm"?>" name="wymiarcm" required></td>
    </tr>
    <tr>
        <td>Waga w KG </td>
        <td><input type="text" value="<?php echo "$waga_kg"?>" name="wagakg" required></td>
    </tr>
    <tr>
        <td>Wymiar w Calach </td>
        <td><input type="text" value="<?php echo "$wymiar_cale"?>" name="wymiarcal" required></td>
    </tr>
    <tr>
        <td>Waga w Funtach </td>
        <td><input type="text" value="<?php echo "$wagafunt"?>" name="wagafunt" required></td>
    </tr>
    <tr>
        <td>Kategoria </td>
        <td><input type="text" value="<?php echo "$kategoria"?>" name="kategoria" required></td>
    </tr>
</table>
<input type="submit" value="akceptuj">
</form>
</div>
</div>