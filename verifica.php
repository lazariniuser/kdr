<?php
    session_start();

    require_once 'connect.php';


    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        require_once 'bd_contas.php';
        $user = new Usuario();
        

        
}
    else{
        header('location: login.php');
    }
?>