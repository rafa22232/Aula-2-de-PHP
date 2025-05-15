<?php

$numero1 = $_POST["numero1"];



if($numero1>0){
    echo "O numero $numero1 é positivo <br>";
}else if($numero1<0) {
    echo "O numero $numero1 é negativo<br>";
} else if ($numero1 == 0){
    echo "O numero 0 é nulo";
}
?>