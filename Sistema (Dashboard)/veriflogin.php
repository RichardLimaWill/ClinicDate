<?php 

session_start();

$login = $_POST['usuario'];
$senha = $_POST['senha'];

require("conexaobd.php");

$sql = "SELECT * FROM usuario WHERE usuario ='$login' AND senha = '$senha'";

$result = mysqli_query($link, $sql);

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $login;
$_SESSION['senha'] = $senha;
$_SESSION['nome'] = $nome;
header('location:index.php');

$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i:s');
$acao = "Conectou-se ao sistema.";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$login')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");
}
else{
  $ip = $_SERVER['REMOTE_ADDR'];
  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $nc = "Usuário Inválido";
  $acao = "Tentativa fracassada ao conectar-se como <b>$login</b>.";
  $sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$nc')";
  mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  header('location:login.php');
  

  }
?>