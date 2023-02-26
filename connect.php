<?php
global $pdo;
  $db_kdrop = 'kdrop';
  $localhost = 'localhost';
  $user = 'root';
  $password = '';
  $pdo = new PDO ("mysql:dbname=".$db_kdrop."; host=".$localhost, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $pdo->query("SELECT * FROM contas");
  $sql->execute();
  
 
  ?>
