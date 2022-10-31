<?php
include 'cabecalho.php';
include 'connect.php';



?>

      <center>
      <div class='row w-25 d-block text-center'>

        <form  action="bd_login.php" method="POST" class="form-group">
            <input type="email" class="form-control mt-2" name="email_login" placeholder="Seu email" required>
            <input type="password" class="form-control mt-2" name="senha_login" placeholder="Insira sua senha" required>
            <input type="submit" value="Fazer Login" class="btn btn-light mt-2">

        </form>
        <h1 class="text-muted">Ainda não tem uma conta? <a href="cadastroconta.php">Crie já a sua!</a>
      </div>
      </center>
