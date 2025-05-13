<?php

$_POST["nota"];
$_POST["nota"];
$_POST["nota"];
$_POST["nota"];
$mediaAluno = 5;

if($mediaAluno >= 9 && $mediaAluno <=10){
    echo "Nota: MB";
}else if($mediaAluno >= 7 && $mediaAluno <=8) {
    echo "Nota: B";
}else if($mediaAluno >= 5 && $mediaAluno < 7 ){
    echo "Nota: R";
}else if($mediaAluno >= 0 && $mediaAluno < 5){
    echo "Nota: I";
}else{
    echo "Média Inválida";
}

//calculo

echo "Nota Média <br>";

$primeiroNota = 5; 
$segundaNota = 5;
$terceiraNota = 5;
$quartaNota = 5;

$resultado = $primeiroNota + $segundaNota + $terceiraNota + $quartaNota / 4;
echo "$primeiroNota + $segundaNota + $terceiraNota + $quartaNota / 2 = $resultado";



?>
