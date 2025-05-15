<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];


if($numero1>$numero2){
    echo "O maior é o $numero1<br>";
}else if($numero1<$numero2) {
    echo "O maior é o $numero2<br>";
} else if ($numero1 = $numero2){
    echo "os dois são iguais";
}
?>