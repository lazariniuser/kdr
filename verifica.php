<?php
    session_start();

    require 'connect.php';


    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        require_once 'bd_contas.php';
        $user = new Usuario();
        $listar_logado = $user->logado($_SESSION['id']);
        echo $listar_logado['nome'];

        
}
    else{
        header('location: login.php');
    }
?>