<?php

    require_once 'conexao.php'; //conecta no banco

    $email = $_POST['emailFormulario'];
    
    if(!empty($email)){

        $sql = "DELETE FROM usuarios WHERE email = :email";

            //preparar a remoção de dados no banco
            $requisicao = $conexao->prepare($sql);
            //Vamos pegar o e-mail digitado no form e passar por parametro,
            //isso fará que a consulta na variavel $sq, use o e-mail que
            //usuario digitou, o bindParam serve para evitar SQLInjection
            //é uma proteção da aplicação no banco de dados
            $requisicao->bindParam(':email', $email);
            try{
                $requisicao->execute();
                if($requisicao->rowCount() > 0){
                    echo "O Usuário foi removido com sucesso";
                }else{
                    echo "O Usuário não existe";
                }
            }catch(PDOException $e){
                echo "Erro ao remover: " . $e->getMessage();

            }

    }else{
        echo "Digite um e-mail para remover algum usuário!";
    }

?>