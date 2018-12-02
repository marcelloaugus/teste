<?php
$Servidor = 'localhost';
$Usuario = 'root';
$Senha = '';
$nomeBanco = 'barco';
$mysqli = new mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco);
  
  
    
  if($mysqli->connect_errno)
    echo"Falha na Conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
  
  ?>