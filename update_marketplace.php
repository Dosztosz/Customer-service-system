<?php
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$czas_jest = $_GET['il'];
$ebay = $_GET['eb'];
$shopper = $_GET['sh'];
$kaufland = $_GET['kauf'];
$cdiscount = $_GET['cdi'];
$etsy = $_GET['etsy'];
$allegro = $_GET['all'];


if (isset($_POST['ilosc']))
{

    $czas_jest_nowa=$_POST['ilosc'];
    $ebay_akt=$_POST['ebay'];
    $shopper_akt=$_POST['shoper'];
    $kaufland_akt=$_POST['kaufland'];
    $cdiscount_akt=$_POST['cdiscount'];
    $etsy_akt=$_POST['etsy'];
    $allegro_akt=$_POST['allegro'];
    require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    if ($conn->connect_errno!=0)
			{
				echo "nie dziala";
			}
            else {
                if($conn->query("UPDATE `karosek` SET `czas_jest` = '$czas_jest_nowa', `ebay` = '$ebay_akt', `shopper` = '$shopper_akt', `kaufland` = '$kaufland_akt', `cdiscount` = '$cdiscount_akt', `etsy` = '$etsy_akt', `allegro` = '$allegro_akt'  WHERE `karosek`.`ID` = $id;"))
                {
                    header('Location: magazyn_biuro.php');
                }
                else
                {
                    echo "cos sie zjebalo";
                }
            }
}




?>
<table>
<tr>
    <td>Amazon</td>
    <td>ebay</td>
    <td>shopper</td>
    <td>kaufland</td>
    <td>cdiscount</td>
    <td>etsy</td>
    <td>allegro</td>
</tr>
<tr>
<form method="post">
    <td><input type="text" value="<?php echo "$czas_jest"?>" name="ilosc" required></td>
    <td><input type="text" value="<?php echo "$ebay"?>" name="ebay" required></td>
    <td><input type="text" value="<?php echo "$shopper"?>" name="shoper" required></td>
    <td><input type="text" value="<?php echo "$kaufland"?>" name="kaufland" required></td>
    <td><input type="text" value="<?php echo "$cdiscount"?>" name="cdiscount" required></td>
    <td><input type="text" value="<?php echo "$etsy"?>" name="etsy" required></td>
    <td><input type="text" value="<?php echo "$allegro"?>" name="allegro" required></td>
</tr>
</table>

<input type="submit" value="akceptuj"><br>

</form>