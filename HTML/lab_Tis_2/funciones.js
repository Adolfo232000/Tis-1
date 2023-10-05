console.log("Hola Mundo");

$(document).ready(function() {
    alert("Hello, world!");
});

function hola() {
    alert("Hola mundo en JS");
}

function CambiarAzulPorId(){
    document.getElementById("cuadrado").style.backgroundColor="blue";
}

function CambiarVerdePorClase(){
    document.getElementsByClassName("cuadrado")[0].style.backgroundColor="green";
}

function reset(){
    document.getElementsByClassName("cuadrado")[0].style.backgroundColor="red";
}