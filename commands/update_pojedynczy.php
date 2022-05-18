<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$czas_jest = $_GET['il'];
$kolumna = $_GET['kol'];
if($kolumna == "'czas_jest'"){
    $kolumna = "czas_jest";
}
elseif($kolumna == "'ebay'"){
    $kolumna = "ebay";
}
elseif($kolumna == "'shopper'"){
    $kolumna = "shopper";    
}
elseif($kolumna == "'kaufland'"){
    $kolumna = "kaufland";    
}
elseif($kolumna == "'cdiscount'"){
    $kolumna = "cdiscount";    
}
elseif($kolumna == "'etsy'"){
    $kolumna = "etsy";    
}
elseif($kolumna == "'allegro'"){
    $kolumna = "allegro";    
}



if (isset($_POST['ilosc']))
{

    $czas_jest_nowa=$_POST['ilosc'];
    require_once "../connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("UPDATE `karosek` SET `$kolumna` = '$czas_jest_nowa'  WHERE `karosek`.`ID` = $id;"))
                {
                    header('Location: ../magazyn_biuro.php');
                }
                else
                {
                    echo "$kolumna";
                    echo "cos sie zjebalo";
                }
            }
}
?>
<table>
<tr>
    <td>Aktualizuj</td>
</tr>
<tr>
<form method="post">
    <td><input type="text" value="<?php echo "$czas_jest"?>" name="ilosc" required></td>
</tr>
</table>

<input type="submit" value="akceptuj"><br>

</form>