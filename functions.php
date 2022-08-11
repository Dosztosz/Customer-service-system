<?php
function refresh(){
    Header('Location: '.$_SERVER['PHP_SELF']);
    Exit(); //optional
}
function add_size(){
    $name = $_POST['name'];
    $size_cm = $_POST['size_cm'];
    $size_inch = $_POST['size_inch'];
    $weight_kg = $_POST['weight_kg'];
    $weight_pound = $_POST['weight_pound'];
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$conn->set_charset("utf8");
    $sql = "INSERT INTO `wymiary` (`Id`, `nazwa`, `wymiarcm`, `wagakg`, `wymiarcale`, `wagafunt`) VALUES (0, '$name', '$size_cm', '$weight_kg', '$size_inch', '$weight_pound');";
    if(isset($name)){
    if($adding = $conn->query($sql))
    {
    }
    else{
        echo 'nie';
    }
    }
    else {
        echo 'nie dziala';
    }
}
function delete($id, $tab) {
    if (isset($id))
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    	mysqli_report(MYSQLI_REPORT_STRICT);
        if ($conn->connect_errno!=0)
    	{
    		echo "nie dziala";
    	}
        else {
            if($conn->query("DELETE FROM `$tab` WHERE `ID` = $id;"))
            {
                refresh();
            }
        }
    }
}
function archive(){
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $id = $_GET['id'];
    $op = $_GET['op'];
    if (isset($id))
    {
        require_once "connect.php";
    	mysqli_report(MYSQLI_REPORT_STRICT);
        if ($conn->connect_errno!=0)
    		{
    			echo "nie dziala";
    		}
            else {
                if($conn->query("UPDATE `zwroty` SET `kategoria` = '$op' WHERE `zwroty`.`ID` = $id;"))
                {
                    refresh();
                }
            }
    }
}
?>