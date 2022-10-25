    <?php
    $index = "";
    $magazyn ="";
    $magazyn_biuro ="";
    $paczki ="";
    $wymiary ="";
    $faq ="";
    $zwroty ="";
    $staty = "";
    $baselinker = "";
    switch($site){
        case "magazyn":
            $magazyn = "active-mine";
            break;
        case "magazyn_biuro":
            $magazyn_biuro = "active-mine";
            break;
        case "paczki":
            $paczki = "active-mine";
            break;
        case "wymiary":
            $wymiary = "active-mine";
            break;
        case "faq":
            $faq = "active-mine";
            break;
        case "zwroty":
            $zwroty = "active-mine";
            break;
        case "baselinker";
            $baselinker = "active-mine";
            break;
        case "skroty";
            $main = "active-mine";
            break;
        case "prices";
            $main = "active-mine";
            break;
    }
    ?>
    <div class="col-1 mobile-none niebieski whole-width">
    <!-- Menu Main -->
    <ul class="list-group">
    <a href="main.php"><li class="list-group-item list-group-item-mine <?php echo $main ?>"><i class="bi bi-house-fill"></i><p>Odpowiedzi</p></li></a>
    <a href="prices.php"><li class="list-group-item list-group-item-mine <?php echo $main ?>"><i class="bi bi-house-fill"></i><p>Cennik</p></li></a>
    <a href="zwroty.php"><li class="list-group-item list-group-item-mine <?php echo $zwroty ?>"><i class="bi bi-arrow-counterclockwise"></i><p>Zwrot</p></li></a>
        <?php
        if($zwroty == "active-mine")
        {
            echo '<li class="list-group-item list-group-item-mine"><a href="archiwum_zwroty.php"><i class="bi bi-arrow-counterclockwise"></i> <p>Archiwum</a></a></li>';
        }
        ?>
        <a href="wymiary.php"><li class="list-group-item list-group-item-mine <?php echo $wymiary ?>"><i class="bi bi-aspect-ratio"></i><p>Wymiary Paczek</p></li></a>
        <a href="paczki.php"><li class="list-group-item list-group-item-mine <?php echo $paczki ?>"><i class="bi bi-currency-dollar"></i><p>Spedycje</p></li></a>
        <a href="magazyn.php"><li class="list-group-item list-group-item-mine <?php echo $magazyn ?>"><i class="bi bi-hdd-stack"> </i><p>Magazyn</p></li></a>
        <a href="magazyn_biuro.php"><li class="list-group-item list-group-item-mine <?php echo $magazyn_biuro ?>"><i class="bi bi-hdd-stack"></i><p>Magazyn biuro</p></li></a>
        <a href="baselinker_warehouse.php"><li class="list-group-item list-group-item-mine <?php echo $baselinker ?>"><i class="bi bi-hdd-stack"></i><p>Produkcja</p></li></a>
        <a href="faq.php"><li class="list-group-item list-group-item-mine <?php echo $faq ?>"><i class="bi bi-question-circle"></i><p>FAQ</p></li></a>
    </ul>
    </div>







    <div class="col-1 mobile niebieski whole-width">
    <!-- Menu Mobile -->
    <ul class="list-group">
    <a href="main.php"><li class="list-group-item list-group-item-mine <?php echo $main ?>"><i class="bi bi-house-fill"></i></li></a>
    <a href="zwroty.php"><li class="list-group-item list-group-item-mine <?php echo $zwroty ?>"><i class="bi bi-arrow-counterclockwise"></i></li></a>
        <?php
        if($zwroty == "active-mine")
        {
            echo '<li class="list-group-item list-group-item-mine '.$zwroty.'"><a href="archiwum_zwroty.php"><i class="bi bi-arrow-counterclockwise"></i></a></li>';
        }
        ?>
        <a href="wymiary.php"><li class="list-group-item list-group-item-mine <?php echo $wymiary ?>"><i class="bi bi-aspect-ratio"></i></li></a>
        <a href="paczki.php"><li class="list-group-item list-group-item-mine <?php echo $paczki ?>"><i class="bi bi-currency-dollar"></i></li></a>
        <a href="magazyn.php"><li class="list-group-item list-group-item-mine <?php echo $magazyn ?>"><i class="bi bi-hdd-stack"> </i></li></a>
        <a href="magazyn_biuro.php"><li class="list-group-item list-group-item-mine <?php echo $magazyn_biuro ?>"><i class="bi bi-hdd-stack"></i></li></a>
        <a href="baselinker_warehouse.php"><li class="list-group-item list-group-item-mine <?php echo $baselinker ?>"><i class="bi bi-hdd-stack"></i></li></a>
        <a href="faq.php"><li class="list-group-item list-group-item-mine <?php echo $faq ?>"><i class="bi bi-question-circle"></i></li></a>
    </ul>
    </div>