<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução - PHP</title>
</head>
<body>
    <?php
    //código php precisa estar dentro da tag
    $nome       ="Rafael";
    $idade      = 18;
    $altura     = 1.87;
    $isAluno    = true;


    //escreve na tela
    echo $nome;

    echo "<br>";


    $texto = "isso é diferente";
    $Texto = "disso";


    $texto = "isso";
    $Texto = "Disso";

    echo "$texto é diferente $Texto";
    echo "<br> Aula de PHP";
    

    //imprimir para o usuario: "Meu nome é XXXXX"

    echo "Meu noem é $nome";

    echo "pulando linha <br> linha quebrada";

    echo "<br><br><br><hr>";

    echo "<br> nome: $nome <br> idade: $idade <br> altura: $altura";
    


    ?>

    
</body>
</html>