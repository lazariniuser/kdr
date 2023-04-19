
<?php

include 'cabecalho.php';
include 'connect.php';




$nome = $_POST['nome'];
$email_aluno = $_POST['email'];
$celular = $_POST['celular'];
$datanasc = $_POST['datanascimento'];
$pasd = $_POST['senha'];



if( empty($nome) || empty($email_aluno) || empty($celular) || empty($datanasc) || empty($pasd)){


    echo ' ?>
    <h1 class="text-light text-center">Ops! Ocorreu um erro.</h1>
    <h3 class="text-muted text-center"> Infelizmente não conseguimos fazer seu cadastro. Talvez você tenha deixado algum campo vazio.</h3><br>
    <a href="cadastroconta.php" class=" d-block text-center"><button class="btn btn-light"><h1>Tentar novamente</button></h1></a> ';


}
else{
    $sql = "INSERT INTO contas (nome, email, celular, datanascimento, senha) VALUES ('$nome', '$email_aluno', '$celular', '$datanasc', '$pasd')";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    header ('location: logged.php');
    


}





?>
</body>
</html>