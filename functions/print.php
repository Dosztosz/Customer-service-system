<html lang="en">
<head>
<title>Magazyn</title>
<?php

require "../addons/head.php";
?>
<style>
    h2 {
        font-size: 3vw;
        text-align: center;
        margin-bottom: 0px;
    }
    table {
        margin-top: 0px;
        width: 100%;
    }
    .table,
        tr {
            align-content: center;
            border: solid 1px rgb(226, 226, 226);
        }
        
        tr:nth-child(even) {
            background-color: #ecfaff;
        }
    </style>
</head>

<body>
<div id="printableTable">
    <table id="myTable">
        <h2>Do Wymalowania</h2>
        <thead>
          <th>Nazwa</th>
          <th>Profil</th>
          <th>Rozmiar</th>
          <th>Kolor</th>
          <th>Ilość</th>
        </thead>
        <?php
        $name = $_GET['nazwa'];
        foreach ($name as $color){ 
            echo $color."<br />";
        }
        ?>
    </table>
</div>
</body>