<div class="col-1 niebieski caly">
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
            $magazyn = "active";
            break;
        case "magazyn_biuro":
            $magazyn_biuro = "active";
            break;
        case "paczki":
            $paczki = "active";
            break;
        case "wymiary":
            $wymiary = "active";
            break;
        case "faq":
            $faq = "active";
            break;
        case "zwroty":
            $zwroty = "active";
            break;
        case "baselinker";
            $baselinker = "active";
            break;
    }
    echo '<a href="index.php"><div class="blok '.$index.'">Odpowiedzi</div></a>';
    echo '<a href="zwroty.php"><div class="blok '.$zwroty.'">Zwrot</div></a>';
    if($zwroty == "active")
    {
        echo '<a href="archiwum_zwroty.php"><div class="blok '.$zwroty.'">Archiwum</div></a>';
    }
    else{}
    echo '<a href="wymiary.php"><div class="blok '.$wymiary.'">Wymiary Paczek</div></a>';
    echo '<a href="paczki.php"><div class="blok '.$paczki.'">Koszty Spedycyjne</div></a>';
    echo '<a href="magazyn.php"><div class="blok '.$magazyn.'">Magazyn</div></a>';
    echo '<a href="magazyn_biuro.php"><div class="blok '.$magazyn_biuro.'">Magazyn biuro</div></a>';
    echo '<a href="baselinker_warehouse.php"><div class="blok '.$baselinker.'">Mag Baselinker</div></a>';
    echo '<a href="faq.php"><div class="blok '.$faq.'">FAQ</div></a>';
?>
    </div>