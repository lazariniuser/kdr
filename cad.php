
<?php

include 'cabecalho.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['cel'];
$datanasc = $_POST['datanascimento'];

//$funcionou = false;



if( empty($nome) || empty($email) || empty($celular) || empty($datanasc)){


    echo ' ?>
    <h1 class="text-light text-center">Ops! Ocorreu um erro.</h1>
    <h3 class="text-muted text-center"> Infelizmente não conseguimos fazer sua inscrição. Talvez você tenha deixado algum campo vazio.</h3><br>
    <a href="index.html" class=" d-block text-center"><button class="btn btn-light"><h1>Tentar novamente</button></h1></a> 
    <?php ';


}
else{
    $insercao = "INSERT INTO alunos (nome, email, celular, datanascimento) VALUES ('$nome', '$email', '$celular', '$datanasc')";
    $resultado = mysqli_query($db_kdrop, $insercao);
    header("location: index.php");
    //$funcionou = true;
}





?>
</body>
</html>