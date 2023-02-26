<?php
    include 'connect.php';
 


class Usuario{
    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM contas WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $_SESSION['id'] = $data['id'];
            header('location: logged.php');
            return true;
            
        }

        else{
            header('location: login.php');
            return false;

        }

    }

    public function logado($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM contas WHERE id = :id";

        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }
} 


?>

