<?php

    require_once 'conexao.php';

    $email = $_POST['emailFormulario'];
    $senha = $_POST['senhaFormulario'];

    if(!empty($email) && !empty($senha)){

        $sql = "SELECT FROM usuarios WHERE email,senha = :email, :senha";
        $requisicao = $conexao->prepare($sql);

         $requisicao->bindParam(':email', $email);
         $requisicao->bindParam(':senha', $senha);

         try{
            $requisicao->execute();
            //Especificar como queremos o retorno da consulta no banco de dados
            //FETCH_ASSOC indica que queremos retornar um array indexado
            $usuarios = $requisicao->fetch(PDO::FETCH_ASSOC);

            if($usuario){
                echo "Nome: " . $usuarios['nome']. "<br>";
                 echo "Email: " . $email['email']. "<br>";
            }else{
                echo "Usuário não encontrado e/ou não existe";
            }
         }catch(PDOException $e){
            echo "Erro ao consultar: " . $e->getMessage();
         }
           
    }else{
        echo "Digite um e-mail para realizar a consulta";
    }    
    


?>