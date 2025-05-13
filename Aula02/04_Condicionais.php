<?php

$idade = 18;
$isCNH = false;
if ($isCNH && $idade >= 18){
    echo "Apto a dirigir";
}else if ($isCNH && $idade >=18){
    echo "Apto a tirar CNH, não pode dirigir<br>";
}else{
    echo "Não pode dirigir";

$possuiAcesso = false;
if (!$possuiAcesso){
    echo "acesso negado <br>";
}else{
    echo "acesso autorizado <br>";
}
}
echo"<br><br><br><hr>";
echo"<h2> Exemplo 2 <h2>";

//exemplo 3

$mediaAluno = 10;

if($mediaAluno >= 9){
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





?>