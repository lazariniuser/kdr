<?php

include 'cabecalho.php';
include 'connect.php';


?>

<form action="cad.php"  class="form-group" method="POST">
            <input type="text" class="form-control" name="nome" placeholder="Seu nome completo" required>
            <input type="email" class="form-control" name="email" placeholder="Seu email" required>
            <input type="password" class="form-control" name="senha" placeholder="Insira sua senha" required>
            <input type="password" class="form-control" name="senhaconfirma" placeholder="Repita a sua senha" required>
            <input type="number" class="form-control" name="celular" placeholder="Celular" required>
            <input type="datetime" class="form-control" name="datanascimento" placeholder="Data de nascimento" required>
            <input type="submit" value="Cadastrar-se" class="btn btn-light">
</form>