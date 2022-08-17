function SelfCopy(copyText) {
    navigator.clipboard.writeText(copyText);
}

function addtext(x) {
    var e = document.getElementById('postText');
    e.value += x;
}

function calculator(data){
    var cmCal = 0.393700787;
    var cal = 2.54;
    var stopa = 30.48;
    var cmStopa = 0.032808399;
    var funt = 2.20462262;
    var kilogram = 0.45359237;
    var input = document.getElementById("input-data").value;


    switch(data){
        case 'cmCale':
            var calculate = input * cmCal;
            var end = ' "';
            break;
        case 'caleCm':
            var calculate = input * cal;
            var end = ' cm';
            break;
        case 'cmStopy':
            var calculate = input * cmStopa;
            var end = ' stóp';
            break;
        case 'stopyCm':
            var calculate = input * stopa;
            var end = ' cm';
            break;
        case 'kgFunt':
            var calculate = input * funt;
            var end = ' funtów';
            break;
        case 'funtKg':
            var calculate = input * kilogram;
            var end = ' kg'
            break;
    }
    var result = (calculate);
    document.getElementById("result").innerHTML = result+end;
}

function navopen(tab, data) {
    document.getElementById(tab).style.display="none";
}