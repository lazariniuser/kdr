<?php
   require_once 'menu_logado.php';
   require_once 'verifica.php';
   require_once 'bd_contas.php'; 


?>
<html>
<body>
    
    <div class="container">
        <div class="row">

            <div class="col-12 bg-light navbar-collapse navbar">
                <form class="form-control" method="POST">
                    <input  type="text"  class="border-0" placeholder="Pesquisar interesses"/>
                    <input type="image" src="assets/42-search-outline.gif" class="img-fluid" width="25px">
                </form>
            </div>
            <div class="col-12 bg-light text-center">

            <div class="fotoperfil">
                <?php
                    $sql_busca = "SELECT photo FROM contas WHERE id = :id";

                ?>

 
                <form method="POST" class="form-control" action="imagens.php" enctype="multipart/form-data">
                      <label for="fotoperfil-label"> 
                                <img src="assets/trocarfoto.png" class="w-25 img-fluid"> 
                                <input type="file" name="input-foto-perfil" id="fotoperfil-label" class="d-none">
                                <input type="submit" value="Salvar">
                      </label>
                    </form>
                </div> 
                
            <?php
                $listar_logado = $user->logado($_SESSION['id']);
                echo "<h3>Boas vindas, <br>".$listar_logado['nome']."!</h3>";

            ?>
            </div>

</body>
</html>