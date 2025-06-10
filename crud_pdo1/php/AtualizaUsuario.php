<?php

    require_once 'conexao.php';

    $nome = $_POST['nomeFormulario'];
    $email= $_POST['emailFormulario'];
    $novaSenha = $_POST['senhaFormulario'];
    


    if(!empty($nome) && !empty($email)){

        //se ele quiser atualizar a senha
            if(!empty($novaSenha)){
            $senhaHash = password_hash($novaSenha,PASSWORD_DEFAULT);
            $sql = "UPDATE usuarios SET nome = :nome, senha = :senha WHERE email = :email";

          }else{
           $sql = "UPDATE usuarios SET nome = :nome WHERE email = :email";

          }

          $requisicao = $conexao->prepare($sql);
          $requisicao->bindParam(':nome', $nome);
          $requisicao->bindParam(':email', $email);

          
          //preciso validar se a nova senha está preenchida, SE estiver vou atribuir o
          //parametro digitado pelo usuario
          if(!empty($novaSenha)){
            $requisicao->bindParam(':senha', $senhaHash);
          }

          try{
            $requisicao->execute();
            echo "Usuário atualizado com sucesso!";

          }catch(PDOException $e){
            echo "Erro ao Atualizar: " . $e->getMessage();
          }
        }else{
            echo "Preencha o nome e email para atualizar";
        }
?>