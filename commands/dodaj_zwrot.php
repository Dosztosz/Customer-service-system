<?php
header("Content-Type: text/html;charset=UTF-8");
require "../connect.php";
$sql = "SELECT * FROM zwroty ORDER BY kategoria ASC;";
$result = $conn->query($sql);
$site = "zwrot_klient";

if (isset($_POST['nazwa_up']))
    {
        $nazwa_up = $_POST['nazwa_up'];
        $nr_zamowien_up = $_POST['nr_zamowien_up'];
        $nr_sledzenia_up = $_POST['nr_sledzenia_up'];
        $data_zwrot_up = $_POST['data_zwrot_up'];
        $notatka_up = $_POST['notatka_up'];
        require_once "../connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        if ($conn->conn_errno!=0)
                {
                    echo "nie dziala polaczenie";
                }
        else 
        {
            if($conn->query("INSERT INTO `zwroty` (`ID`, `klient`, `nr_zamowienia`, `nr_sledzenia`, `data_zwrotu`, `notatka`, `kategoria`) VALUES (NULL, '$nazwa_up', '$nr_zamowien_up', '$nr_sledzenia_up', '$data_zwrot_up', '$notatka_up', 'a');"))
            {
                header('Location: ../zwroty.php');
            }
            else{
                echo"nie dziala wsadzanie";
            }
        }
    }
?>