<?php

$name = $_POST["name"];


if($name == "A" || $name == "E" || $name == "I" || $name == "O" || $name == "U") {
    echo "A letra $name é vogal<br>";
} else {
    echo "A letra $name é consoante<br>";
} 
?>