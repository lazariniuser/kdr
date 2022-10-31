<?php
    include 'connect.php';
    include 'cabecalho.php';
    $cnome = $_POST['cad_nome'];
    $cemail = $_POST['cad_email'];
    $ccelular = $_POST['cad_cel'];
    $cdatanasc = $_POST['cad_datanascimento'];
    $csenha = $_POST['cad_senha'];
    $csenhaconf = $_POST['cad_senhaconfirma'];
    $insercao = "INSERT INTO contas (nome, email, celular, datanascimento, senha) VALUES ('$cnome', '$cemail', '$ccelular', '$cdatanasc','$csenha')";
    $resultado = mysqli_query($db_kdrop, $insercao);



    if(isset($csenha) && isset($csenhaconf)){
        if($csenha != $csenhaconf){
            echo "senhas incompatíveis";
        }
        else {
            return;
        }
    }

?>