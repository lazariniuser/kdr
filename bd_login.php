<?php
include 'cabecalho.php';
include 'verifica.php';




if(isset($_POST['email_login']) && !empty($_POST['email_login']) && isset($_POST['senha_login']) && !empty($_POST['senha_login'])){
    require_once 'bd_contas.php';
    $user = new Usuario();
    $email = addslashes($_POST['email_login']);
    $senha = addslashes($_POST['senha_login']);
    if($user->login($email, $senha) == true){
        if(isset($_SESSION['id'])){
            header('location: logged.php');


        }

        else {
            header('location: login.php');
        }

    }



}
else{
    header("location: login.php");
}
