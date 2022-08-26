<style>

.range {
  width: 100%;
}
.bubble {
  background: black;
  color: white;
  padding: 4px 12px;
  border-radius: 4px;
  left: 50%;
  transform: translateX(-50%);
}

body {
  margin: 2rem;
}
</style>
<form method="post" action="test_stoly.php">
    <h2>Wybierz Wymiary</h2>
    <p>Wybierz Długość Blatu</p>
    <div class="range-wrap" style="width: 20%;">
        <input type="range" class="range" min="50" max="350" name="dlugosc">
        <output class="bubble"></output>
    </div style="width: 20%;">
    <p>Wybierz Szerokość Blatu</p>
    <div class="range-wrap" style="width: 20%;">
        <input type="range" class="range" min="50" max="200">
        <output class="bubble"></output>
    </div>
    <p>Wpisz wagę blatu</p>
    <div class="range-wrap" style="width: 20%;">
        <input type="text">KG
    </div>
    <input type="submit" value="submit">
</form>
<?php 
if(isset($_POST['submit']))
{
   display();
} 
?>
<script>

const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 100;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val+' '+'cm';
}
 </script>
<?php

function wymiar() {
    $dlugosc = $_POST['dlugosc'];
    $szerokosc = $_POST['szerokosc'];
    $waga = $_POST['waga'];
    switch ($dlugosc) {
        case $dlugosc > 120:
            $dlugosc = "250";
            echo $dlugosc;
            break;
    }
}


?>