<?php
$id = $_GET['id'];
$nome_paciente = $_GET['paciente'];
$nome_medico = $_GET['medico'];

require 'conexaobd.php';
require('seguranca.php');
$usuario = $logado;
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i:s');
$acao = "O consulta de $nome_paciente com $nome_medico foi deletada do sistema.";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

$sql = "DELETE FROM consulta WHERE id = '$id'";
mysqli_query($link, $sql)or die("Não foi posivel deletar!!"); 


echo '<script>
      alert("Dado deletado com sucesso!!!") 
      location.href="listagem_consulta.php"
      </script>';



?>