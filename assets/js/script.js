function SelfCopy(copyText) {
    navigator.clipboard.writeText(copyText);
}

function addtext(x) {
    var e = document.getElementById('postText');
    e.value += x;
}

function fun() {
    var cena = 0.393700787;
    var dzielnik = document.getElementById("contactform-member").value;
    var calculate = dzielnik * cena;
    var wynik = (calculate);
    document.getElementById("wynik").innerHTML = wynik;
}

function centymetry() {
    var cal = 2.54;
    var wymiar = document.getElementById("contactform-centymetry").value;
    var przelicz_centymetr = wymiar * cal;
    var wynik_centymetry = (przelicz_centymetr);
    document.getElementById("wynik_centymetry").innerHTML = wynik_centymetry;
}

function funt() {
    var funt = 2.20462262;
    var kilogram = document.getElementById("contactform-funt").value;
    var przelicz = kilogram * funt;
    var wynik_funt = (przelicz);
    document.getElementById("wynik_funt").innerHTML = wynik_funt;
}

function kilogram() {
    var kilogramy = 0.45359237;
    var funty = document.getElementById("contactform-kilogram").value;
    var przelicz_kilogramy = kilogramy * funty;
    var wynik_kilogram = (przelicz_kilogramy);
    document.getElementById("wynik_kilogram").innerHTML = wynik_kilogram;
}
function stoopki() {
    var stoopki = 30.48
    var stopa = document.getElementById("contactform-stoopki").value;
    var przelicz_stoopki = stoopki * stopa;
    var wynik_stoopki = (przelicz_stoopki);
    document.getElementById("wynik_stoopki").innerHTML = wynik_stoopki;
}
function stoopki_cm() {
    var stoopki_cm = 0.032808399;
    var stopa_cm = document.getElementById("contactform-stoopkicm").value;
    var przelicz_stoopki_cm = stoopki_cm * stopa_cm;
    var wynik_stoopki_cm = (przelicz_stoopki_cm);
    document.getElementById("wynik_stoopki_cm").innerHTML = wynik_stoopki_cm;
}
function navopen(tab, data) {
    document.getElementById(tab).style.display="none";
}



alert("You just copied this: (" + copyText + ").");