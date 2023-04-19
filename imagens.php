<?php
    require_once 'verifica.php';

    $recebe_imagem = $_FILES['input-foto-perfil']['name'];
    $tamanho_imagem = $_FILES['input-foto-perfil']['size'];
    
    $userid = $_SESSION['id'];

    if($tamanho_imagem < 10000000){
        $extendArquivo = end(explode('.', $_FILES["input-foto-perfil"]["name"]));
        $cript = "profile-photos/" . sha1(time() . $_FILES["input-foto-perfil"]["name"]) . "." . $extendArquivo;
        $sql_profile = "UPDATE contas SET photo=:imagem where id=:user_id";
        $dado_para_atualizar = [
            'imagem' => $recebe_imagem,
            'user_id' => $userid
          ];
          $insere_imagem = $pdo->prepare($sql_profile);
          $insere_imagem->execute($dado_para_atualizar);
          file_put_contents($_FILES["input-foto-perfil"]["name"], $cript);
          header("location: logged.php");

    }
    
    else{
        require_once 'menu_logado.php';
        echo '<body class="bg-dark"><h1 class="text-center text-light">A imagem é muito grande! Escolha uma menor, por gentileza.</h1><center><a href="logged.php" class="btn btn-light float-center">Voltar</a></center></body>';
    }

?>