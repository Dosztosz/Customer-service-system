<?php
    
    session_start();

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('location: odpowiedzi.php');
        exit();
    }





    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logowanie</title>
    <?php
    require "addons/head.php";
    ?>
    <link href="assets/css/style_logowanie.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="blok">
            <img scr="logo.png">
            <h3>Zaloguj Się</h3>
            <form action="zaloguj.php" method="post">
                Login<br><input type="text" id="login"><br>
                Hasło<br><input type="password" id="haslo"><br>
                <input class="button" type="submit" value="zaloguj">
            </form>

            <?php
            
            if (isset($_SESSION['blad'])) echo $_SESSION['blad'];

            ?>
        </div>
    </div>
</body>
</html>