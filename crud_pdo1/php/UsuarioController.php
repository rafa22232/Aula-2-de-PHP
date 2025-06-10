<?php

    $requisicao = $_POST['requisicao'];

    switch($requisicao){
        case 'Atualizar':
            include 'AtualizarUsuario.php';
            break;

       case 'Cadastrar':
        include 'CadastrarUsuario.php';
        break;
        
        case 'Consultar':
        include 'ConsultaUsuario.php';
        break;
        
        case 'Remove':
        include 'RemoveUsuario.php';
        break;

        default:
            echo "Ação inválida, por gentileza selecionar uma opção válida";
            break;
        
 }

?>