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
    if($site == "skroty"){$index = "active";}
    elseif ($site == "magazyn"){$magazyn = "active";}
    elseif ($site == "magazyn_biuro"){$magazyn_biuro = "active";}
    elseif ($site == "paczki"){$paczki = "active";}
    elseif ($site == "wymiary"){$wymiary = "active";}
    elseif ($site == "faq"){$faq = "active";}
    elseif ($site == "zwroty"){$zwroty = "active";}
    elseif ($site == "staty"){$staty = "active";}
    echo '<a href="index.php"><div class="blok '.$index.'">Odpowiedzi</div></a>';
    echo '<a href="zwroty.php"><div class="blok '.$zwroty.'">Zwrot</div></a>';
    echo '<a href="wymiary.php"><div class="blok '.$wymiary.'">Wymiary Paczek</div></a>';
    echo '<a href="paczki.php"><div class="blok '.$paczki.'">Koszty Spedycyjne</div></a>';
    echo '<a href="magazyn.php"><div class="blok '.$magazyn.'">Magazyn</div></a>';
    echo '<a href="magazyn_biuro.php"><div class="blok '.$magazyn_biuro.'">Magazyn biuro</div></a>';
    echo '<a href="stats.php"><div class="blok '.$staty.'">Statystyki</div></a>';
    echo '<a href="faq.php"><div class="blok '.$faq.'">FAQ</div></a>';
?>
    </div>