<?php
function conect2DB(){
    $db = mysqli_connect("localhost","root","", "inmobiliaria");

    if ($db){
        echo "Conectado";
    } else {
        echo "No conectado";
    } 
    return $db;
}
?>