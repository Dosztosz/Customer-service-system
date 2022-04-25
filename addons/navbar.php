<div class="col-1 niebieski">
    <?php
    if ($site == "odpowiedzi")
    {
        echo '<a href="index.php"><div class="blok active">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok">FAQ</div></a>';
    }
    elseif ($site == "magazyn")
    {
        echo '<a href="index.php"><div class="blok">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok active">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok">FAQ</div></a>';
    }
    elseif ($site == "magazyn_biuro")
    {
        echo '<a href="index.php"><div class="blok">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok active">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok">FAQ</div></a>';
    }
    elseif ($site == "paczki")
    {
        echo '<a href="index.php"><div class="blok">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok active">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok">FAQ</div></a>';
    }
    elseif ($site == "wymiar")
    {
        echo '<a href="index.php"><div class="blok">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok active">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok">FAQ</div></a>';
    }
    elseif ($site == "faq")
    {
        echo '<a href="index.php"><div class="blok">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok active">FAQ</div></a>';
    }
    elseif ($site == "zwroty")
    {
        echo '<a href="index.php"><div class="blok">Odpowiedzi</div></a>';
        echo '<a href="wymiar.php"><div class="blok">Wymiary Paczek</div></a>';
        echo '<a href="zwroty.php"><div class="blok active">Zwroty</div></a>';
        echo '<a href="paczki.php"><div class="blok">Koszty Spedycyjne</div></a>';
        echo '<a href="magazyn.php"><div class="blok">Magazyn</div></a>';
        echo '<a href="magazyn_biuro.php"><div class="blok">Magazyn biuro</div></a>';
        echo '<a href="faq.php"><div class="blok">FAQ</div></a>';
    }
    


?>
    </div>