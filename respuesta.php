<?php
if(($_GET["Edad"] >= 0) && ($_GET["Edad"] <=18)){
    echo "Hola ";
    echo $_GET["Usuario"];
    echo "<br>";
    echo "Note que tu ID es: ";
    echo $_GET["ID"];
    echo "<h1 style='color: red; font-family: 'Segoe UI';'> Sos niño o adolescente, el color rojo te va bien</h1>";
}
if(($_GET["Edad"] >= 19) && ($_GET["Edad"] <=30)){
    echo "Hola ";
    echo $_GET["Usuario"];
    echo "<br>";
    echo "Note que tu ID es: ";
    echo $_GET["ID"];
    echo "<h1 style='color: blue; font-family: 'Segoe UI';'>Usted es un adulto joven, el color azul le va bien</h1>";
}
if(($_GET["Edad"] >= 31) && ($_GET["Edad"] <=60)){
    echo "Hola ";
    echo $_GET["Usuario"];
    echo "<br>";
    echo "Note que tu ID es: ";
    echo $_GET["ID"];
    echo "<h1 style='color: green; font-family: 'Segoe UI';'>Usted es un adulto mediano, el color verde le va bien</h1>";
}
if(($_GET["Edad"] >= 61) && ($_GET["Edad"] <=100)){
    echo "Hola ";
    echo $_GET["Usuario"];
    echo "<br>";
    echo "Note que tu ID es: ";
    echo $_GET["ID"];
    echo "<h1 style='color: black; font-family: 'Segoe UI';'>Usted es un Anciano, el color negro le va bien</h1>";
}
if(($_GET["Edad"]) > 100){
    echo "Hola ";
    echo $_GET["Usuario"];
    echo "<br>";
    echo "Note que tu ID es: ";
    echo $_GET["ID"];
    echo "<h1 style='color: rgb(64, 224, 208); font-family: 'Segoe UI';'>Su edad va mas alla de las expectativas de vida normal, es una excepcion</h1>";
}
?>