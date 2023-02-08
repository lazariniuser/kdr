<?php
include 'cabecalho.php';
include 'connect.php';



if(isset($_POST['email_login']) || isset($_POST['senha_login'])) {

    if(strlen($_POST['email_login']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha_login']) == 0) {
        echo "Preencha sua senha";
    } else {
        
        $email = mysqli_real_escape_string( $db_kdrop, $_POST['email_login']);
        $senha = mysqli_real_escape_string( $db_kdrop, $_POST['senha_login']);

        $sql_code = "SELECT * FROM contas WHERE email = '$email' AND senha = '$senha'";
        $sql_query = mysqli_query( $db_kdrop, $sql_code);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: logged.php");

        } else {
            header("Location: index.php");
        }

    }

}     

?>

