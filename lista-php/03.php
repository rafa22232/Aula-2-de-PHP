<?php

$name = $_POST["name"]; 

if($name == 'm' || $name == 'M') {
    echo "Você tem o gênero masculino <br>";
}
else if($name == 'f' || $name == 'F') {
    echo "Você tem o gênero feminino <br>";
}
else {
    echo "Sexo inválido <br>";
}

?>

