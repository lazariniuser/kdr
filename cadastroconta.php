<?php

include 'cabecalho.php';
include 'connect.php';


?>

<form action="bd_contas.php"  class="form-group" method="POST">
            <input type="text" class="form-control" name="cad_nome" placeholder="Seu nome completo" required>
            <input type="email" class="form-control" name="cad_email" placeholder="Seu email" required>
            <input type="password" class="form-control" name="cad_senha" placeholder="Insira sua senha" required>
            <input type="password" class="form-control" name="cad_senhaconfirma" placeholder="Repita a sua senha" required>
            <input type="number" class="form-control" name="cad_cel" placeholder="Celular" required>
            <input type="datetime" class="form-control" name="cad_datanascimento" placeholder="Data de nascimento" required>
            <input type="submit" value="Cadastrar-se" class="btn btn-light">
</form>