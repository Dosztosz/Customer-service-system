<?php
header("Content-Type: text/html;charset=UTF-8");
require "session_test.php";
    require "connect.php";
    $sql = "SELECT * FROM karosek;";
	  $result = $conn->query($sql);
    $site = "magazyn";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Magazyn</title>
<?php

require "addons/head.php";
?>
</head>

<body>
    <?php
    require 'addons/title.php'
?>
<div class="row">
    <!--menu pionowe-->
    <?php
    require 'addons/navbar.php'
    ?>
    <div class="col-11">

        <div class="row bialy">
            <div class="col-11">
                <!--wypis produktow-->
            <h1 class="srodek">Magazyn na Karosku</h1>
            <hr>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Wyszukaj...">
            <a href="nowy_produkt.php"><button>Dodaj produkt</button></a>
            <table class="table table-hover" id="myTable">
              <thead>
                <th scope="col">Nazwa</th>
                <th scope="col">Ilość</th>
              </thead>
        <?php
                    while($row = $result->fetch_assoc()) {
                        $id = $row['ID'];
                        $nazwa = $row['Nazwa'];
                        $profil = $row['Profil'];
                        $rozmiar = $row['Rozmiar'];
                        $kolory = $row['Kolor'];
                        $ilosc = $row['Ilosc'];
                        echo "<tr>";
                        echo '<td class="duze">'.$nazwa.' | '.$profil.' | '.$rozmiar.' | '.$kolory.'</td>';
                        echo '<td class="reszta"><a href = update.php?id='.$id.'&il='.$ilosc.'&naz='.$nazwa.'>'.$ilosc.' szt</a></td>';
                        echo "</tr>";
                    }
                        ?>
                        <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

                        </form>
            </table>
            </div>
            </div>
            </div>
</body>

</html>