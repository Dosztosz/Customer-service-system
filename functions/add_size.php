<?php
$name = $_POST['name'];
$size_cm = $_POST['size_cm'];
$size_inch = $_POST['size_inch'];
$weight_kg = $_POST['weight_kg'];
$weight_pound = $_POST['weight_pound'];
require "../connect.php";
$conn = new mysqli($host, $db_user, $db_password, $db_name);
$sql = "INSERT INTO `wymiary` (`Id`, `nazwa`, `wymiarcm`, `wagakg`, `wymiarcale`, `wagafunt`) VALUES (0, '$name', '$size_cm', '$weight_kg', '$size_inch', '$weight_pound');";

if(isset($name)){

    if($adding = $conn->query($sql))
    {
        header('location: ../wymiar.php');
    }
    else{
        echo 'nie';
    }
}
else {
    echo 'nie dziala';
}










?>