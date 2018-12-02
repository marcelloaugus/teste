<?php
include_once("conexao.php");
$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$cpf = $_POST['CPF'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];
$strcon = mysqli_connect('localhost','root','','barco') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cad_adm VALUES ";
$sql .= "('$nome', '$sobrenome', '$cpf','$email','$senha' )"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>